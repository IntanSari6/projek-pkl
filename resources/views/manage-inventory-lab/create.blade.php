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
        <label for="name_goods" class="form-label">Nama Barang</label>
        <input type="text" class="form-control  @error('name_goods') is-invalid @enderror" id="name_goods" name="name_goods" required autofocus value="{{old('name_goods')}}">
        @error('name_goods')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="item_code" class="form-label">Kode Barang</label>
        <input type="text" class="form-control @error('item_code') is-invalid @enderror" id="item_code" name="item_code" required value="{{old('item_code')}}">
        @error('item_code')
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