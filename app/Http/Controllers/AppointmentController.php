<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Appointment\InstallmentCounter;
use App\Services\Appointment\Appointment;

class AppointmentController extends Controller
{
    // Объекты классов-сервисов
    private $installmentCounterService; // Сервис расчётов данных для рассрочки
    private $appointmentService; // Сервис CRUD для сущности заявки

    public function __construct(InstallmentCounter $installmentCounterService, Appointment $appointmentService){
        $this->installmentCounterService = $installmentCounterService;
        $this->appointmentService = $appointmentService;
    }

    public function store(Request $request){
        $appointment = $request->except(['_token']);
        
        // Вызываем метод расчёта суммы
        $this->installmentCounterService->prepareAppointment($appointment);
    }
}
