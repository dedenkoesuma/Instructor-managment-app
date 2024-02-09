@extends('layouts.auth.app')
@section('page')

<div class="col-lg-11">
  @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>
<button type="button" class="btn btn-info"><a href="{{ route('schedules.create') }}" class="text-white">Add Schedule</a></button>
<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Learning Materials</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start_Time</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End_Time</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
      @foreach($schedules as $schedule)
        <tr>
          <td>
          <div class="d-flex px-2 py-1">
            <h6 class="mb-0 text-xs">{{ $schedule->title }}</h6>
              <div>
          </td>
          <td>
            <span class="text-secondary text-xs font-weight-normal">{{ $schedule->date }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-normal">{{ $schedule->start_time }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-normal">{{ $schedule->end_time }}</span>
          </td>
          <td class="p-0">
            <a class="badge bg-warning" href="/dashboard/schedules/{{ $schedule->id }}/edit">
                <span data-feather="edit" width="15"></span>
            </a>
            <form action="/dashboard/schedules/{{ $schedule->id }}" method="post" class="d-inline-block">
                  @method('delete')
                  @csrf
                  <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin Ga nih?')">
                      <span data-feather="x-circle" width="15"></span>
                  </button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
