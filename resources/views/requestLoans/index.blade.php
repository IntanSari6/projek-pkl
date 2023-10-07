@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Riwayat Peminjaman</h3>
    </div>
    <br>
    <div class="col-12 col-md-6 col-lg-12">
        <div class="buttons pt-3 pb-2 mt-9">
            @if(auth()->user()->is_admin==0)
        <a href="/requestLoans/create" class="btn btn-icon btn-primary">Lanjut</a>
        @endif
    </div>
    </div>
        <div class="card">
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
                            <th>Pesan</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($reqloans as $req)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $req->nip_teacher }}</td>
                                <td>{{ $req->teacher_name }}</td>
                                <td>{{ $req->class }}</td>
                                <td>{{ $req->subjects }}</td>
                                <td>{{ $req->lab }}</td>
                                <td>{{ $req->start }}</td>
                                <td>{{ $req->finished }}</td>
                                <td>{{ $req->review }}</td>
                                <td>
                                    @if($req->status=='terima')
                                    <a href="#" class="btn btn-info">Diterima</a>
                                    @elseif ($req->status=='tolak')
                                    <a href="#" class="btn btn-danger">Ditolak</a>
                                    @elseif ($req->status=='proses')
                                    <a href="#" class="btn btn-warning">Proses</a>
                                    @elseif ($req->status=='sedang dipakai')
                                    <a href="#" class="btn btn-primary">Sedang dipakai</a>
                                    @elseif ($req->status=='selesai')
                                    <a href="#" class="btn btn-success">Selesai</a>
                                    @elseif ($req->status=='batal')
                                    <a href="#" class="btn btn-danger">Dibatalkan</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>


            <div class="card-footer text-right">
                {!! $reqloans->links()!!}
            </div>
        </div>
    </div>
   
@endsection
