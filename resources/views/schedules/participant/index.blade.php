@extends('layouts.auth.app')
@section('page')
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
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
