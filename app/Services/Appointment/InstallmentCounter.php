<?php

namespace App\Services\Appointment;

use App\Models\Procedure;
use Carbon\Carbon;

class InstallmentCounter{

    // Метод распределения данных формы на обработку
    public function prepareAppointment($appointment){
        $appointment = $this->countSum($appointment); // Рассчитываем исходную сумму
        $appointment = $this->installmentPeriod($appointment); // Рассчитываем кол-во месяцев рассрочки и сумм платежей
        $appointment = $this->paymentDates($appointment); //Рассчитываем даты платежей

        return $appointment;
    }

    // Метод расчёта общей суммы процедур
    private function countSum($appointment){
        $totalPrice = 0;
        $procedures = Procedure::all()->toArray();

        for($i = 0; $i < sizeof($appointment['appointmentProcedures']); $i++){
            for($j = 0; $j < sizeof($procedures); $j++){
                if($appointment['appointmentProcedures'][$i] == $procedures[$j]['name']){
                    if($appointment['appointmentProcedures'][$i] == 'Коррекция одной зоны'){
                        $product = $procedures[$j]['price'] * $appointment['corrections_num'];
                        $totalPrice += $product;
                    }else if($appointment['appointmentProcedures'][$i] == 'Обновление одной зоны'){
                        $product = $procedures[$j]['price'] * $appointment['renews_num'];
                        $totalPrice += $product;
                    }else{
                        $totalPrice += $procedures[$j]['price'];
                    }
                }
            }
        }
        $appointment['total_price'] = $totalPrice;
        $appointment['initial_fee'] = $totalPrice * 0.35; // Первоначальный взнос

        return $appointment;
    }

    // Метод расчёта месяцев рассрочки и сумм платежей
    private function installmentPeriod($appointment){
        $monthsNum = 0; // Кол-во месяцев
        $remainder = 0; // Остаток (разница между общей суммой и первоначальным взносом)
        $installmentSum = 0; // Сумма рассрочки

        if($appointment['total_price'] < 300) $monthsNum = 3;
        else if($appointment['total_price'] > 300) $monthsNum = 4;

        $remainder = $appointment['total_price'] - $appointment['initial_fee'];    
        $installmentSum = $remainder / $monthsNum;
        $installmentSum = number_format($installmentSum, 2, '.', '');

        $appointment['installment_sum'] = $installmentSum;
        
        return $appointment;
    }

    // Метод вычисления дат платежей по рассрочке 
    private function paymentDates($appointment){
        $monthsCnt = 3;
        $visitDateExploded = explode('-', $appointment['visit_date']);

        if($appointment['total_price'] > 300) $monthsCnt = 4;
        for($i = 1; $i <= $monthsCnt; $i++){
            $visitDate = Carbon::createFromDate($visitDateExploded[0], $visitDateExploded[1], $visitDateExploded[2]);
            $appointment['installment_payment_date' . $i] = $visitDate->addMonths($i);
            $appointment['installment_payment_date' . $i] = $appointment['installment_payment_date' . $i]->toDateString();
        }
        
        return $appointment;
    }
}