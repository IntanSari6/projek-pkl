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
          @foreach ($inventory as $inventory)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$inventory->name_goods}}</td>
            <td>{{$inventory->item_code}}</td>
            <td>{{$inventory->status}}</td>
            <td>            
              <a href="/manage-inventory-lab/{{ $inventory->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/manage-inventory-lab/{{ $inventory->id }}" method="POST" class="d-inline">
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
      <nav class="d-inline-block">
        <ul class="pagination mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
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

@endsection