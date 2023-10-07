@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Edit Data Guru</h3>
</div>
<br>

<div class="col-lg-8">
    <form method="post" action="{{ url('manage-teacher-data', $user->id) }}" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" hidden name ="id" value="{{$user->id}}">
      <div class="mb-3">
        <label for="name" class="form-label">Nama Guru</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{$user->name}}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{$user->email}}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required>
            @error('nip')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="subjects" class="form-label">Mata Pelajaran</label>
            <input type="text" class="form-control @error('subjects') is-invalid @enderror" id="subjects" name="subjects" required>
            @error('subjects')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="mb-3 col-50 ">
            <select class="form-select" arial-label="Default select example" name="gender" id="gender" @error('gender') is-invalid @enderror>
                {{-- <option value="Pilih">Pilih</option> --}}
                <option value="Perempuan">Perempuan</option>
                <option value="Laki Laki">Laki Laki</option>
            </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">is_admin</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('is_admin') is-invalid @enderror" type="text" id="is_admin" name="is_admin" required>
          </div>
          @error('is_admin')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          </div>
          @error('image')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
    
        
        
      <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
    
        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
    }
    </script>

@endsection