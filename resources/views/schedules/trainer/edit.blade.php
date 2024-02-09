@extends('layouts.auth.app')
@section('page')
<div class="col-lg-8 mt-5"> 
  <button type="button" class="btn btn-primary">
    <a href="{{ route('schedules.index') }}" class="text-white">
        <span data-feather="arrow-left" width="15"class="me-3" ></span>Back
    </a>
  </button>
    <form method="post" action="/dashboard/schedules/{{ $schedule->id }}" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Learning Materials</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Learning Materials"
            required autofocus value="{{ old('title', $schedule->title) }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Date"
            required autofocus value="{{ old('date', $schedule->date) }}">
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="time" class="form-control @error('start_time') is-invalid @enderror" id="start_time" name="start_time" placeholder="Start Time"
            required autofocus value="{{ old('start_time', $schedule->start_time) }}">
            @error('start_time')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_time" class="form-label">End Time</label>
            <input type="time" class="form-control @error('start_time') is-invalid @enderror" id="end_time" name="end_time" placeholder="End Time"
            required autofocus value="{{ old('end_time', $schedule->end_time) }}">
            @error('end_time')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4" >Add Schedule</button>
    </form>
</div>
@endsection
