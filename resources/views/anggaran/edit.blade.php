@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Anggaran Edit</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('anggaran.update', $anggaran->id) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="form-group">
          <label for="basicInput">Jumlah Anggaran</label>
          <input type="text" name="jumlah" class="form-control" id="basicInput" value="{{ $anggaran->jumlah }}"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Nama Anggaran</label>
          <input type="text" name="nama_anggaran" class="form-control" id="basicInput" value="{{ $anggaran->nama_anggaran }}"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Nama User</label>
          <select name="user_id" class="form-control" id="">
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