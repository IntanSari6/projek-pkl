@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Kelola Data Guru</h3>
</div>
<br>

@if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
      @endif

<div class="col-12 col-md-6 col-lg-12">
    <div class="card-body p-0">
      <div class="table-responsive">
        <a href="/manage-teacher-data/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-striped table-md">
          <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>NIP</th>
            <th>Mata Pelajaran</th>
            <th>Jenis Kelamin</th>
            <th>Is_Admin</th>
            <th>Image</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $bebas)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$bebas->name}}</td>
            <td>{{$bebas->email}}</td>
            <td>{{$bebas->password}}</td>
            <td>{{$bebas->nip}}</td>
            <td>{{$bebas->subjects}}</td>
            <td>{{$bebas->gender}}</td>
            <td>{{$bebas->is_admin}}</td>
            <td>{{$bebas->image}}</td>
            <td>
                <a href="/manage-teacher-data/{{ $bebas->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/manage-teacher-data/{{ $bebas->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i></button>
              </form>
            </td>
          </tr>     
          @endforeach
        </table>
      </tbody>
      </div>    
    </div>

    <div class="card-footer text-right">
      {{-- {!! $inventory->links()!!} --}}
    </div>
  </div>
</div>

@endsection