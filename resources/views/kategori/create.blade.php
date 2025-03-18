@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Kategori Add</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('kategori.store') }}" method="POST">
          @csrf
        <div class="form-group">
          <label for="basicInput">Nama Kategori</label>
          <input type="text" name="nama" class="form-control" id="basicInput" placeholder="Masukan Nama"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Catatan</label>
          <textarea name="catatan" class="form-control" id="" width="100%" rows="3"></textarea>
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