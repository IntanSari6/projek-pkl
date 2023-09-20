@extends('main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
  <h3>Request Peminjaman</h3>
</div>
<br>
     <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Form Peminjaman</h4>
              </div>
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">NIP</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Nama</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Kelas</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Mapel</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Tanggal</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Durasi</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Lab</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric">
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1">Ulasan</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple"></textarea>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label col-1 col-md-1 col-lg-1"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

