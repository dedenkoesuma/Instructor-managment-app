<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Requests\UpdateQuestionsRequest;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role === 'participant') {
            $questions = Questions::with('schedule')->get();
            return view('questions.participant.index',[
                'questions' => $questions
            ]);
        }else{
            $questions = Questions::with('schedule')->get();
            return view('questions.trainer.index',[
                'questions' => $questions
            ]);
        }
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('questions.participant.create',
            [
                'schedules' => Schedule::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionsRequest $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "schedule_id" => "required|exists:schedules,id",
            "description" => "required",
        ]);

        // Mendapatkan user ID yang sedang login
        $userId = Auth::id();

        // Membuat objek Question dan mengisi propertinya  
        $question = new Questions();
        $question->name = $validatedData['name'];
        $question->schedule_id = $validatedData['schedule_id'];
        $question->description = $validatedData['description'];
        $question->user_id = $userId;// Mengisi user ID yang sedang login
        
        // Simpan pertanyaan ke dalam database
        $question->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect('/dashboard/questions')->with('success', 'Question added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //jika dia adalah participant maka dia bisa menambahkan pertanyaan dengan status otomatis terisi yaitu progres
    if(auth()->user()->role === 'participant') {
        $question = Questions::findOrFail($id);
        return view('questions.participant.edit', 
        [
            'question' => $question,
            'schedules' => Schedule::all()
        ]);
        //tapi jika dia adalah trainer maka dia cuman bisa mengedit status dan menambahkan jawaban
        }else{
            $question = Questions::findOrFail($id);
        return view('questions.trainer.edit', 
        [
            'question' => $question,
            'schedules' => Schedule::all()
        ]);
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionsRequest $request, $id)
    {
        if(auth()->user()->role === 'participant') {
        // cari Questions yang ingin diperbarui
        $questions = Questions::findOrFail($id);

        $validatedData = $request->validate([
            "name" => "required|max:255",
            "schedule_id" => "required|exists:schedules,id",
            "description" => "required",
        ]);

        $userId = Auth::id();

        // Memperbarui properti jadwal dengan data yang diterima dari permintaan
        $questions->name = $request->input('name');
        $questions->user_id = $userId;// Mengisi user ID yang sedang login
        $questions->schedule_id = $request->input('schedule_id');
        $questions->description = $request->input('description');

        // Menyimpan perubahan
        $questions->save();
        return redirect('/dashboard/questions')->with('success', 'Question updated successfully');
        }else{
            // cari Questions yang ingin diperbarui
            $questions = Questions::findOrFail($id);
    
            $validatedData = $request->validate([
                "status"=> "required",
                "answers" => "required",
            ]);
    
            // Memperbarui properti jadwal dengan data yang diterima dari permintaan
            $questions->status = $request->input('status');
            $questions->answers = $request->input('answers');
    
            // Menyimpan perubahan
            $questions->save();
            return redirect('/dashboard/questions')->with('success', 'Question updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $question = Questions::findOrFail($id);
        $question->delete();
        return redirect('/dashboard/questions')->with('success', 'Question deleted successfully');
    }
    
}
