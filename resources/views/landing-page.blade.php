@extends('layouts.main')

@section('container')
    <section id="hero" style="padding-top: 0">
        <div class="container">
            <div class="row align-items-center justify-content-between" style="min-height: 100vh">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Selamat Datang Di Website Laboratorium SMKS Mahaputra Cerdas Utama</h1>
                        <div class="text-center text-lg-start">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4-mt-9-pd-5 order-1 order-lg-2" data-aos="zoom-out">
                    <img src="assets/img/logo mp.png" style="height:350px" alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">


                    <div class="col-xl-10 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Tata Tertib Penggunaan Lab</h3>
                        <div>
                            <p>1. Selalu menjaga kebersihan dan kerapihan lab</p>
                            <p>2. Berhak menggunakan komputer pada saat jam sekolah</p>
                            <p>3. Hanya boleh mengggunakan satu komputer dalam satu waktu </p>
                            <p>4. Jika tidak mematuhi peraturan atau ketentuan maka akan mendapat sanksi</p>
                            <p>5. Jika merusak alat alat penunjang praktikum diwajibkan untuk menggantinya </p>
                            <p>6. Dilarang menghapus, menginstall software atau memodifikasi program komputer di lab</p>
                            <p>7. Mematikan komputer dan CPU maupun layar monitor setiap kali selesai menggunakan komputer</p>
                            <p>8. Tidak boleh membuka, mendownload, ataupun menyimpan file berbau pornografi, rasis dan sebagainya</p>
                            <p>9.  Dilarang merusak, atau mengambil hardware, software atau fasilitas lab tanpa seijin petugas lab</p>
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
                                    <div class="fc-overflow">
                                        <div id="KalenderPeminjaman"></div>
                                    </div>
                                   
                                </div>
                                <div class="card-footer text-right">
                                    {!! $reqloan->links()!!}
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
    <button type="button" hidden id='callmodal' data-bs-toggle="modal" data-bs-target="#staticBackdrop"></button>
    <div class="modal fade" id="staticBackdrop"  data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Detail</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body table-responsive">
                                    <table class="table table-bordered no margin ">
                                        <tbody>
                                            <tr>
                                                <th>NIP :</th>
                                                <td id='datamodal-nip_teacher'></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Guru:</th>
                                                <td id='datamodal-teacher_name'></td>
                                            </tr>
                                            <tr>
                                                <th>Kelas :</th>
                                                <td id='datamodal-class'></td>
                                            </tr>
                                            <tr>
                                                <th>Mata Pelajaran :</th>
                                                <td id='datamodal-subjects'></td>
                                            </tr>
                                            <tr>
                                                <th>Lab :</th>
                                                <td id='datamodal-lab'></td>
                                            </tr>
                                            <tr>
                                                <th>Mulai :</th>
                                                <td id='datamodal-start'></td>
                                            </tr>
                                            <tr>
                                                <th>Selesai :</th>
                                                <td id='datamodal-finished'></td>
                                            </tr>
                                            <tr>
                                                <th>Pesan :</th>
                                                <td id='datamodal-review'></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    {{-- <div class="text-center buttons pt-3 pb-2 mt-9">
                                 <a href="" id="datamodal-sedangdipakai" class="btn btn-icon btn-primary">Masuk</a>
  </div>   --}}
                                </div>
                            </div>
                         </div>
                    </div>
@endsection
@push('js')
<script>

$("#KalenderPeminjaman").fullCalendar({
  height: 'auto',
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  editable: true,
  events: [
    @foreach($reqloan as $item)
    {
      title: '{{$item->id}}-{{$item->teacher_name}}',
      start: '{{$item->start}}',
      end: '{{$item->finished}}',
      backgroundColor: '{{ ($item->status=="terima") ? "#808000" : "#6777ee"}}',
      borderColor: "#fff",
      textColor: '#000'
    },
    @endforeach
  ],
  eventClick: function (info) {
    console.log(info);
    $('#callmodal').click();
    $.ajax({
        type:'get',
        url: "/get-datamodal/"+info.title,
        success: function(res){
            console.log(res);
            if(res.action_button=='show'){

                $('#datamodal-sedangdipakai').attr('href',res.action).text(res.action_text).removeClass('d-none');
            }else if(res.action_button=='hide'){
                $('#datamodal-sedangdipakai').attr('href',null).text(res.action_text).addClass('d-none');
            }
            $('#datamodal-nip_teacher').text(res.nip_teacher);
            $('#datamodal-teacher_name').text(res.teacher_name);
            $('#datamodal-class').text(res.class);
            $('#datamodal-subjects').text(res.subjects);
            $('#datamodal-lab').text(res.lab);
            $('#datamodal-start').text(res.start);
            $('#datamodal-finished').text(res.finished);
            $('#datamodal-review').text(res.review);
        }
    })
  }

});
</script>
@endpush
