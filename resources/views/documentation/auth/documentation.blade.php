@extends('layouts.auth.app')
@section('page')
<div class="row my-4">
    <div class="col-lg-11 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Instructur Led Managment</h6>
              <p class="text-sm mb-1">
                  Sebuah aplikasi sederhana yang menyediakan fitur berikut :
              </p>
              <ol class="text-sm">
                    <li>Managment Schedule</li>
                    <li>Managment Question</li>
              </ol>
              <h6>Latar Belakang</h6>    
              <p class="text-sm mb-1">
              Instructor Led merupakan kegiatan rutin mingguan yang dilaksanakan sebanyak 2x yaitu pada hari Senin dan Selasa pukul 19.30 
              s.d 20.30 di tiap masing-masing harinya. Saat ini dalam proses administrasi masih menggunakan sistem yang manual yaitu 
              menggunakan google spreadsheet. Mulai dari penjadwalan trainer, absensi peserta sampai pertanyaan peserta.
              </p>
              <h6>Yang perlu di perhatikan :</h6>
                <p class="text-sm mb-1">
                  Saya membuat aplikasi ini dengan role pada setiap users, tujuannya untuk membedakan fitur apa saja yang di dapat di 
                  dashboard, ada 2 role dalam aplikasi ini 
                </p>
              <h6>Role :</h6>
              <ol class="text-sm">
                    <li>Trainer</li>
                    <li>Participant</li>
              </ol>
              <h6>Fitur-Fitur Dalam Setiap Role :</h6>
              <p class="text-sm mb-1">Trainer</p>
              <ol class="text-sm">
                    <li>View,Add,Update,Delete Schedules</li>
                    <li>Update,Delete Questions <br> *Noted: Trainer hanya bisa menjawab petanyaan pada edit questions dan mengubah status questions dari progress menjadi done ketika sudah di jawab</li>
              </ol>
              <p class="text-sm mb-1">Participant</p>
              <ol class="text-sm">
                    <li>View Schedules</li>
                    <li>View,Add,Edit Questions</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
        </div>
      </div>
    </div>
  </div>
@endsection