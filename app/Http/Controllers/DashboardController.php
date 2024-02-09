<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Questions;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'questions'=> Questions::count(),
            'schedules' => Schedule::count(),
        ]);
    }
  

}
