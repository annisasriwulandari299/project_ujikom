@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Pengeluaran Edit</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="form-group">
          <label for="basicInput">Jumlah</label>
          <input type="text" name="jumlah" class="form-control" id="basicInput" value="{{ $pengeluaran->Jumlah }}"/>
        </div>
        <label for="basicInput">Deskripsi</label>
          <input type="text" name="deskripsi" class="form-control" id="basicInput" value="{{ $pengeluaran->deskripsi }}"/>
        </div>
        <label for="basicInput">Anggaran</label>
          <input type="text" name="anggaran" class="form-control" id="basicInput" value="{{ $pengeluaran->anggaran }}"/>
        </div>
        <label for="basicInput">Kategori</label>
          <input type="text" name="kategori" class="form-control" id="basicInput" value="{{ $pengeluaran->kategori }}"/>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary round">Submit</button>
            <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary round">Back</a>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection