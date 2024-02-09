@extends('layouts.guest.app')
@section('page')
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Use this amazing form to log in or create a new account. and experience the features that come with it </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register Users</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" method="POST" action="{{ route('register') }}">
              @csrf
                <div class="mb-3">
                  <input type="text" id="name" name="name" required class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="email" id="email" name="email" class="form-control" required placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" id="password" name="password" class="form-control" required placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Confirm Password" aria-label="password_confirmation" aria-describedby="password_confirmation-addon">
                  @error('confirm_password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div>
                    <select id="role" name="role" required class="form-control" aria-label="role" aria-describedby="email-addon">
                        <option value="" selected disabled>Pilih Role</option>
                        <option value="participant">Participant</option>
                        <option value="trainer">Trainer</option>
                    </select>
                    @error('role')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection