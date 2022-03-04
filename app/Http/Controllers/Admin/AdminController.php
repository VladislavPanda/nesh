<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Services\Appointment\DateHandler;

class AdminController extends Controller
{
    private $dateHandlerService;

    public function __construct(DateHandler $dateHandlerService){
        $this->dateHandlerService = $dateHandlerService;
    }

    public function signin(){
        return view('admin.appointment.signin');
    }

    public function index(){
        $appointments = Appointment::all()->toArray();
        $appointments = $this->dateHandlerService->handle($appointments);
        
        return view('admin.appointment.index', compact('appointments'));
    }
}
