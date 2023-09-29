@extends('main')

@section('container')

<div class="container">
    <div class="main-body">
    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
            <h3>Profil</h3>
        </div>
    <br>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/dist/assets/img/{{ auth()->user()->image }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ auth()->user()->name }}</h4>
                      <p class="text-secondary mb-1">{{ auth()->user()->gender }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIP</h6>
                    </div>
                    <div class="col-sm-9">
                        {{ auth()->user()->nip }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9">
                        {{ auth()->user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mata Pelajaran</h6>
                    </div>
                    <div class="col-sm-9">
                        {{ auth()->user()->subjects }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9">
                        {{ auth()->user()->gender }}
                    </div>
                  </div>
                  <hr>
                  </div>
            </div>
          </div>

        </div>
    </div>

  {{-- <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- Main Content -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Profil</h3>
    </div>
          <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="/dist/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">NIP</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Nama</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Mata Pelajaran</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{ auth()->user()->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div>PWPB</div></div>
               
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
          
            </div>
          </div>
        </section>
      </div>
  </div> --}}

@endsection