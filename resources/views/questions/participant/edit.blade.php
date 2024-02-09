@extends('layouts.auth.app')
@section('page')
<div class="col-lg-8 mt-5"> 
  <button type="button" class="btn btn-primary">
    <a href="{{ route('questions.index') }}" class="text-white">
        <span data-feather="arrow-left" width="15"class="me-3" ></span>Back
    </a>
  </button>
    <form method="post" action="/dashboard/questions/{{ $question->id }}" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name"
            required autofocus value="{{ old('name', $question->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="schedule_id" class="form-label">Input Schedule</label>
            <select class="form-control @error('schedule_id') is-invalid @enderror" id="schedule_id" name="schedule_id" placeholder="schedule_id"
            required autofocus value="{{ old('schedule_id', $question->schedule_id) }}">
                <option value="" selected disabled>Select Schedule</option>
                @foreach ($schedules as $schedule)
                    <option value="{{ $schedule->id }}">{{ $schedule->title }}</option>
                @endforeach
            </select>
            @error('schedule_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Input Your Question</label>
            <textarea  type="time" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description"
            required autofocus>{{$question->description}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4" >Update Questions</button>
    </form>
</div>
@endsection
