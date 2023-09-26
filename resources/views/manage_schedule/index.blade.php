@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Jadwal peminjaman</h3>
    </div><br>
    <div class="row">
        <div id="app">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-body">
                                    <div class="fc-overflow">
                                        <div id="KalenderPeminjaman"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <button type="button" id='callmodal' data-toggle="modal" data-target="#staticBackdrop"></button>
    <div class="modal fade" id="staticBackdrop"  data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body table-responsive">
                                    <table class="table table-bordered no margin ">
                                        <tbody>
                                            <tr>
                                                <th>NIP :</th>
                                                <td id='datamodal-nip'></td>
                                            </tr>
                                            <tr>
                                                <th>Nama :</th>
                                                <td id='datamodal-nama_guru'></td>
                                            </tr>
                                            <tr>
                                                <th>Kelas :</th>
                                                <td id='datamodal-kelas'></td>
                                            </tr>
                                            <tr>
                                                <th>Mata Pelajaran :</th>
                                                <td id='datamodal-mata_pelajaran'></td>
                                            </tr>
                                            <tr>
                                                <th>Lab :</th>
                                                <td id='datamodal-lab'></td>
                                            </tr>
                                            <tr>
                                                <th>Mulai :</th>
                                                <td id='datamodal-mulai'></td>
                                            </tr>
                                            <tr>
                                                <th>Selesai :</th>
                                                <td id='datamodal-selesai'></td>
                                            </tr>
                                            <tr>
                                                <th>Ulasan :</th>
                                                <td id='datamodal-ulasan'></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                <a href="/ubah_statusLoans//tolak" class="btn btn-icon btn-secondary">Tolak</a>
                                <a href="/ubah_statusLoans//terima" class="btn btn-icon btn-primary">Terima</a>
                                </div>
                            </div>
                         </div>
                    </div>
@endsection
@push('script')
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
      title: '{{$item->id}}-{{$item->nama_guru}}',
      start: '{{$item->mulai}}',
      end: '{{$item->selesai}}',
      backgroundColor: "#fff",
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

            $('#datamodal-nip').text(res.nip_guru);
            $('#datamodal-nama_guru').text(res.nama_guru);
            $('#datamodal-kelas').text(res.kelas);
            $('#datamodal-mata_pelajaran').text(res.mata_pelajaran);
            $('#datamodal-lab').text(res.lab);
            $('#datamodal-mulai').text(res.mulai);
            $('#datamodal-selesai').text(res.selesai);
            $('#datamodal-ulasan').text(res.ulasan);
        }
    })
  }

});
</script>
@endpush