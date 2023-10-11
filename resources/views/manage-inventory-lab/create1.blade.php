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
        <label for="lab_name" class="form-label">Nama Lab</label>
        <input type="text" class="form-control  @error('lab_name') is-invalid @enderror" id="lab_name" name="lab_name" required autofocus value="{{old('lab_name')}}">
        @error('lab_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="color" class="form-label">Warna</label>
        <div class="col-sm-12 col-md-12">
          <select name="color" class="form-control selectric">
            <option> primary </option>
            <option> secondary </option>
            <option> success </option>
            <option> danger </option>
            <option> warning </option>
            <option> info </option>
            <option> light </option>
            <option> dark </option>
          </select>
        </div>
        @error('color')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
        
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection