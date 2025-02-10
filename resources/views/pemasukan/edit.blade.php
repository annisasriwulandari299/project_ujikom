@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Pemasukan Edit</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('pemasukan.update', $pemasukan->id) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="form-group">
          <label for="basicInput">Jumlah</label>
          <input type="text" name="nama" class="form-control" id="basicInput" value="{{ $pemasukan->jumlah }}"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Deskripsi</label>
          <textarea name="catatan" class="form-control" id="" width="100%" rows="3">{{ $pemasukan->deskripsi }}</textarea>
        </div>
        <div class="form-group">
          <label for="basicInput">Anggaran</label>
          <input type="text" name="nama" class="form-control" id="basicInput" value="{{ $pemasukan->anggaran }}"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary round">Submit</button>
            <a href="{{ route('pemasukan.index') }}" class="btn btn-secondary round">Back</a>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection