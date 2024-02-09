@extends('layouts.auth.app')
@section('page')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
            <a href="{{route('questions.index')}}">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Amount Questions</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$questions}}
                </h5>
              </div>
              </a>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
            <a href="{{route('schedules.index')}}">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Amount Schedule</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$schedules}}
                </h5>
              </div>
            </a>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <h5 class="font-weight-bolder">Instructor Led managment</h5>
                <p class="mb-5">Aplikasi ini dibuat agar dapat mengelola jadwal, menginput soal, untuk documentasi lengkapnya bisa klik Read More dibawah.</p>
                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('documentation.auth')}}">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              <div class="bg-gradient-primary border-radius-lg h-100">
                <img src="../img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="../img/illustrations/rocket-white.png" alt="rocket">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100 p-3">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../img/ivancik.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the Led App</h5>
            <p class="text-white">dengan ini kamu bisa lebih effisien mengelola jadwal dan mengelola pertanyaan untuk komunitas, perusahaan, bahkan sekolah mu.</p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('documentation.auth')}}">
              Read More
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection