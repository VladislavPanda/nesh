<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Appointment\InstallmentCounter;
use App\Services\Appointment\AppointmentCRUD;

class AppointmentController extends Controller
{
    // Объекты классов-сервисов
    private $installmentCounterService; // Сервис расчётов данных для рассрочки
    private $appointmentCRUDService; // Сервис CRUD для сущности заявки

    public function __construct(InstallmentCounter $installmentCounterService, AppointmentCRUD $appointmentCRUDService){
        $this->installmentCounterService = $installmentCounterService;
        $this->appointmentCRUDService = $appointmentCRUDService;
    }

    public function store(Request $request){
        $appointment = $request->except(['_token']);
        
        $appointment = $this->installmentCounterService->prepareAppointment($appointment); // Вызываем стартовый метод сервиса
        $this->appointmentCRUDService->store($appointment); // Осуществляем запись обработанного объекта в БД

        //$appointment['appointmentProcedures'] = json_decode($appointment['appointmentProcedures'], true);
        
        return view('appointmentResult', compact('appointment'));
    }
}
