@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Tambah Data Inventaris</h3>
</div>
<br>

<div class="col-lg-8">
    <form method="post" action="/manage-inventory-lab" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" required autofocus value="{{old('nama_barang')}}">
        @error('nama_barang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang</label>
        <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" required value="{{old('kode_barang')}}">
        @error('kode_barang')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
        <div class="mb-3">
            <label for="status" class="form-label">Kondisi</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" required value="{{old('status')}}">
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="lab_id" class="form-label">Lab</label>
            <input type="number" class="form-control @error('lab_id') is-invalid @enderror" id="lab_id" name="lab_id" required value="{{old('lab_id')}}">
            @error('lab_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection