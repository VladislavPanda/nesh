<?php

namespace App\Services\Appointment;

use App\Models\Appointment;

class AppointmentCRUD{
    
    // Метод записи заявки
    public function store($appointment){
        //$flag = true;
        $appointment['appointmentProcedures'] = json_encode($appointment['appointmentProcedures'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
        unset($appointment['corrections_num']);
        unset($appointment['renews_num']);

        Appointment::create($appointment);

        //return $flag;
    }
}