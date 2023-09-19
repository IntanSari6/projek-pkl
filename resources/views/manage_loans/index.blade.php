@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Kelola Riwayat Peminjaman</h3>
    </div>
    <br>
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Peminjaman Lab</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Lab</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Ulasan</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($reqloans as $req)
                            <tr>
                                <td>{{ $req->id }}</td>
                                <td>{{ $req->nip_guru }}</td>
                                <td>{{ $req->nama_guru }}</td>
                                <td>{{ $req->kelas }}</td>
                                <td>{{ $req->mata_pelajaran }}</td>
                                <td>{{ $req->lab }}</td>
                                <td>{{ $req->mulai }}</td>
                                <td>{{ $req->selesai }}</td>
                                <td>{{ $req->ulasan }}</td>
                                <td>
                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                data-target="#staticBackdrop{{$req->id}}" data-item="">Detail</button>
                                <td>

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

    @foreach ($reqloans as $req)
   
            <div class="modal fade" id="staticBackdrop{{$req->id}}"  data-keyboard="false" tabindex="-1"
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
                                    <table class="table table-bordered no margin {{ $req->id }}">
                                        <tbody>
                                            <tr>
                                                <th>NIP :</th>
                                                <td>{{ $req->nip_guru }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama :</th>
                                                <td>{{ $req->nama_guru }}</td>
                                            </tr>
                                            <tr>
                                                <th>Kelas :</th>
                                                <td>{{ $req->kelas }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mata Pelajaran :</th>
                                                <td>{{ $req->mata_pelajaran }}</td>
                                            </tr>
                                            <tr>
                                                <th>Lab :</th>
                                                <td>{{ $req->lab }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mulai :</th>
                                                <td>{{ $req->mulai }}</td>
                                            </tr>
                                            <tr>
                                                <th>Selesai :</th>
                                                <td>{{ $req->selesai }}</td>
                                            </tr>
                                            <tr>
                                                <th>Ulasan :</th>
                                                <td>{{ $req->ulasan }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tolak</button>
                                    <a href="/manage_schedule" class="btn btn-icon btn-primary">Terima</a>
                                </div>
                            </div>
                         </div>
                    </div>
            @endforeach


   
@endsection 