<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role === 'participant') {
            return view('schedules.participant.index',[
                "schedules" => Schedule::all(),
            ]);
        }else{
        return view('schedules.trainer.index',[
            "schedules" => Schedule::all(),
        ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('schedules.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        $userId = Auth::id();
        $schedule = new Schedule();
        $schedule->title = $request->input('title');
        $schedule->user_id = $userId; 
        $schedule->date = $request->input('date');
        $schedule->start_time = $request->input('start_time');
        $schedule->end_time = $request->input('end_time');
        
        $schedule->save();

        return redirect('/dashboard/schedules')->with('success', 'Schedule added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return view('schedules.trainer.edit',[
            'schedule'=> $schedule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        $userId = Auth::id();
        // Memperbarui properti jadwal dengan data yang diterima dari permintaan
        $schedule->title = $request->input('title');
        $schedule->user_id = $userId;
        $schedule->date = $request->input('date');
        $schedule->start_time = $request->input('start_time');
        $schedule->end_time = $request->input('end_time');
        
        // Menyimpan perubahan
        $schedule->save();
        return redirect('/dashboard/schedules')->with('success', 'Schedule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect('/dashboard/schedules')->with('success', 'Schedule deleted successfully');
    }
}
