@extends('layouts.auth.app')
@section('page')

<div class="col-lg-11">
  @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>
<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Schedule Title</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Answer</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
      @foreach($questions as $question)
        <tr>
          <td>
          <div class="d-flex px-2 py-1">
            <h6 class="mb-0 text-xs">{{ $question->name }}</h6>
              <div>
          </td>
          <td>
            <span class="text-secondary text-xs font-weight-normal">{{ $question->schedule->title }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-normal">{{ $question->description }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-normal">{{ $question->status }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-normal">{{ $question->answers }}</span>
          </td>
          <td class="p-0">
            <a class="badge bg-warning" href="/dashboard/questions/{{ $question->id }}/edit">
                <span data-feather="edit" width="15"></span>
            </a>
            <form action="/dashboard/questions/{{ $question->id }}" method="post" class="d-inline-block">
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