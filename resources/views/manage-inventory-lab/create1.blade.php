@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Tambah Data Lab</h3>
</div>
<br>

<div class="col-lg-8">
    <form method="post" action="{{ route('lab.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="nama_lab" class="form-label">Nama Lab</label>
        <input type="text" class="form-control  @error('nama_lab') is-invalid @enderror" id="nama_lab" name="nama_lab" required autofocus value="{{old('nama_lab')}}">
        @error('nama_lab')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="warna" class="form-label">Warna</label>
        <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna" required value="{{old('warna')}}">
        @error('warna')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
        
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection