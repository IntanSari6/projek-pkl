@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Form Request Peminjaman Lab</h3>
    </div> <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <form action="/manage_loans/store" method="post">
                    @csrf
                    <br>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">NIP</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nip_teacher" class="form-control" value="{{ auth()->user()->nip}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="teacher_name" class="form-control" value="{{ auth ()->user()->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Kelas</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="class" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Mapel</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="subjects" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Lab</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-select" arial-label="Default select example" name="lab" id="lab">
                                    @foreach ($lab as $item)
                                        <option value="{{$item->id}}">{{$item->lab_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Mulai</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="datetime-local" name="start" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Selesai</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="datetime-local" name="finished" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1">Pesan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="review" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-1 col-md-1 col-lg-1"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
