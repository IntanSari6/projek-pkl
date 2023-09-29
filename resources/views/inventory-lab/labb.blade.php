@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
    <h3>{{$lab->lab_name}}</h3>
</div>
<br>
<div class="col-12 col-md-6 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Inventaris Lab 1</h4>
        <div class="card-body">
          <div class="dropdown d-inline mr-2">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pilih
            </button>
            <div class="dropdown-menu">
             @foreach ($labs as $lab)
              <a class="dropdown-item" href="/labb/{{$lab->id}}">{{$lab->lab_name}}</a>
             @endforeach

            </div>
          </div>
      </div>
      </div>

      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tr>
              <th>#</th>
              <th>Nama Barang</th>
              <th>Kode Barang</th>
              <th>Kondisi</th>
            </tr>
            @foreach ($inventory as $bebas)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$bebas->name_goods}}</td>
              <td>{{$bebas->item_code}}</td>
              <td>{{$bebas->status}}</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        {!! $inventory->links()!!}
      </div>
    </div>
  </div>

@endsection