@extends('layouts.main')

@section('container')
    <section id="hero">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Selamat Datang Di Website Laboratorium SMKS Mahaputra Cerdas Utama</h1>
                        <div class="text-center text-lg-start">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">


                    <div class="col-xl-10 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Tata Tertib Penggunaan Lab</h3>
                        <p>SMKS Mahaputra Cerdas Utama</p>
                        <div>
                            <p>1. Selalu menjaga kebersihan dan kerapihan lab</p>
                            <p>2. Berhak menggunakan komputer pada saat jam sekolah</p>
                            <p>3. Hanya boleh mengggunakan satu komputer dalam satu waktu </p>
                            <p>4. Jika tidak mematuhi peraturan atau ketentuan maka akan mendapat sanksi</p>
                            <p>5. Jika merusak alat alat penunjang praktikum diwajibkan untuk menggantinya </p>
                            <p>6. Dilarang menghapus, menginstall software atau memodifikasi program komputer di lab</p>
                            <p>7. Mematikan komputer dan CPU maupun layar monitor setiap kali selesai menggunakan komputer</p>
                            <p>8. Tidak boleh membuka, mendownload, ataupun menyimpan file berbau pornografi, rasis dan sebagainya</p>
                            <p>9.  Dilarang merusak, memindahkan, atau mengambil hardware, software atau fasilitas lab tanpa seijin petugas lab</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <section id="Jadwal" class="Jadwal">
                    <div class="container">
        
                        <div class="section-title" data-aos="fade-up">
                            <h2>Laboratorium</h2>
                            <p>Jadwal Peminjaman Lab</p>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Jadwal Lab</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Guru</th>
                                                <th>Kelas</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Lab</th>
                                                <th>Mulai</th>
                                                <th>Selesai</th>
                                                <th>Status</th>
                                            </tr>
                                            @foreach ($reqloan as $req)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$req->teacher_name}}</td>
                                                <td>{{$req->class}}</td>
                                                <td>{{$req->subjects}}</td>
                                                <td>{{$req->lab}}</td>
                                                <td>{{ $req->start }}</td>
                                                <td>{{ $req->finished }}</td>
                                                <td>
                                                    <div class="badge badge-primary">{{ $req->status }}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span
                                                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                    
                            </div>
                        </div>
        
                    </div>
                </section>

                <div class="row" data-aos="fade-up">

                    


                </div>

            </div>
        </section>

    </main>
@endsection
