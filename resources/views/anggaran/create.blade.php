@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Anggaran Add</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('anggaran.store') }}" method="POST">
          @csrf
        <div class="form-group">
          <label for="basicInput">Jumlah</label>
          <input type="text" name="jumlah" class="form-control" id="basicInput" placeholder="Masukan Jumlah"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Nama</label>
          <input type="text" name="nama_anggaran" class="form-control" id="basicInput" placeholder="Nama Anggaran"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Nama User</label>
          <select name="user_id" class="form-control" id="">
            <option value="" selected disabled >-- Pilih User --</option>
            @foreach($user as $data)
            <option value="{{ $data->id }}">{{ $data->username }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary round">Submit</button>
            <a href="{{ route('anggaran.index') }}" class="btn btn-secondary round">Back</a>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection