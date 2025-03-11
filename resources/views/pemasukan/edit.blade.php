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
          <label for="basicInput">Jumlah Pemasukan</label>
          <input type="text" name="jumlah_pemasukan" class="form-control" id="basicInput" value="{{ $pemasukan->jumlah_pemasukan }}"/>
        </div>
        <div class="form-group">
          <label for="basicInput">Deskripsi</label>
          <input type="text" name="deskripsi" class="form-control" id="basicInput" value="{{ $pemasukan->deskripsi }}"/>
        </div>
        {{-- <div class="form-group">
          <label for="basicInput">Anggaran</label>
          <select name="anggaran_id" class="form-control" id="">
            @foreach($anggaran as $data)
            <option value="{{ $data->id }}">{{ $data->nama_anggaran }}</option>
            @endforeach
          </select>
        </div> --}}
        <div class="form-group">
          <label for="basicInput">Kategori</label>
          <select name="kategori_id" class="form-control" id="">
            @foreach($kategori as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
            @endforeach
          </select>
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
