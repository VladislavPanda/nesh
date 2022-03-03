<?php

namespace App\Services\Appointment;

class DateHandler{

    public function handle($appointments){
        for($i = 0; $i < sizeof($appointments); $i++){
            foreach($appointments[$i] as $key => &$value){
                if(strpos($key, 'installment_payment') !== false || strpos($key, 'visit_date') !== false){
                    $dateExploded = explode('-', $value);
                    if(isset($dateExploded[1]) && isset($dateExploded[2])) $value = $dateExploded[2] . '-' . $dateExploded[1] . '-' . $dateExploded[0];
                }
            }   
        }

        return $appointments;
    }
}