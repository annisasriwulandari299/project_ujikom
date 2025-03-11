@extends('layouts.frontend.template') @section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Pemasukan</h4>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('pemasukan.store') }}" method="POST">
          @csrf
        <div class="form-group">
          <label for="basicInput">Jumlah</label>
          <input type="text" name="jumlah_pemasukan" class="form-control" id="basicInput" placeholder="Masukan Jumlah"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="" width="100%" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="basicInput">Kategori</label>
          <select name="kategori_id" class="form-control" id="">
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
            @endforeach
          </select>
        </div>
        {{-- <div class="form-group">
          <label for="basicInput">Anggaran</label>
          <select name="anggaran_id" class="form-control" id="">
            <option value="">-- Pilih Anggaran --</option>
            @foreach($anggaran as $data)
            <option value="{{ $data->id }}">{{ $data->nama_anggaran }}</option>
            @endforeach
          </select>
        </div> --}}
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
