@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Kategori Edit</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="form-group">
          <label for="basicInput">Nama Kategori</label>
          <input type="text" name="nama" class="form-control" id="basicInput" value="{{ $kategori->nama_kategori }}"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Catatan</label>
          <textarea name="catatan" class="form-control" id="" width="100%" rows="3">{{ $kategori->catatan }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary round">Submit</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary round">Back</a>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection