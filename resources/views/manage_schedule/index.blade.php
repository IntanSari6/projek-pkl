@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Kelola Jadwal Peminjaman Lab</h3>
    </div><br>
    <div class="row">
        <div id="app">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
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
    <button type="button" hidden id='callmodal' data-toggle="modal" data-target="#staticBackdrop"></button>
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
                                                <td id='datamodal-nip_teacher'></td>
                                            </tr>
                                            <tr>
                                                <th>Nama :</th>
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
                                </div>
                                <div class="modal-footer">
                                <a href="" id="datamodal-hapus" class="btn btn-icon btn-primary">Batalkan</a>
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
      title: '{{$item->id}}-{{$item->teacher_name}}',
      start: '{{$item->start}}',
      end: '{{$item->finished}}',
      backgroundColor: "#6777ee",
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
            $('#datamodal-hapus').attr('href','get_datamodal_batalkan/'+res.id);
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