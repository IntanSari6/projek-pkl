@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Kelola Inventaris {{$lab->lab_name}}</h3>
</div>
<br>

@if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
      @endif

<div class="col-12 col-md-6 col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4>Inventaris  {{$lab->lab_name}}</h4>
      <div class="card-body">
        <div class="dropdown d-inline mr-2">
          <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih
          </button>
          <div class="dropdown-menu">
            @foreach ($labs as $lab)
            <a class="dropdown-item" href="/lab/{{$lab->id}}">{{$lab->lab_name}}</a>
           @endforeach

          </div>
        </div>
    </div>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <a href="/manage-inventory-lab/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-striped table-md">
          <thead>
          <tr>
            <th>#</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Kondisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($inventory as $bebas)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$bebas->name_goods}}</td>
            <td>{{$bebas->item_code}}</td>
            <td>{{$bebas->status}}</td>
            <td>            
              <a href="/manage-inventory-lab/{{ $bebas->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/manage-inventory-lab/{{ $bebas->id }}" method="POST" class="d-inline">
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
      {!! $inventory->links()!!}
    </div>
  </div>
</div>

@endsection