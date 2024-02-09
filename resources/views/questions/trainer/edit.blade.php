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
            required autofocus value="{{ old('name', $question->name) }}" disabled>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="schedule_id" class="form-label">Schedule</label>
            <input type="text" class="form-control @error('schedule_id') is-invalid @enderror" id="schedule_id" schedule_id="schedule_id" placeholder="Full schedule_id"
            required autofocus value="{{ old('schedule_id', $question->schedule->title) }}" disabled>
            @error('schedule_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Input Your Question</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description"
            required autofocus disabled>{{$question->description}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="status"
            required autofocus value="{{ old('name', $question->status) }}">
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="answers" class="form-label">Answer</label>
            <textarea class="form-control @error('answers') is-invalid @enderror" id="answers" name="answers" placeholder="answers"
            required autofocus >{{$question->answers}}</textarea>
            @error('answers')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4" >Update Questions</button>
    </form>
</div>
@endsection
