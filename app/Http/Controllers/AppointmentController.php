<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Bid;

class AppointmentController extends Controller
{
    // Объекты классов-сервисов
    private $installmentCounterService; // Сервис расчётов данных для рассрочки
    private $appointmentService; // Сервис CRUD для сущности заявки

    public function store(Request $request){
        $appointment = $request->except(['_token']);
        

    }
}
