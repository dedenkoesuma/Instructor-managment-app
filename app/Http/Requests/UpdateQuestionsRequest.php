<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(auth()->user()->role === 'participant') {
            return [
                "name" => "required|max:255",
                "schedule_id" => "required|exists:schedules,id",
                "description" => "required",
            ];
        }else{
        return [
            'status' => 'required',
            'answers' => 'required',
        ];
        }
    }
}
