@extends('layouts.frontend.template')
@section('content')
<div class="row" id="table-hover-row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Table Pengeluaran</h4>
      </div>
      <div class="card-content">
        @foreach ($pengeluaran as $item)
        @if ($item->anggaran->jumlah < $item->jumlah_pengeluaran)
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Jumlah Pengeluaran Melebihi Anggaran</h4>
            <p>Jumlah Pengeluaran Melebihi Anggaran</p>
        </div>
        @endif
        @endforeach
        <div class="card-body">
            <a href="{{  route('pengeluaran.create') }}" type="button" class="btn btn-primary round">Add +</a>
        </div>
        <!-- table hover -->
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th>NO</th>
                <th>JUMLAH</th>
                <th>DESKRIPSI</th>
                <th>TOTAL ANGGARAN</th>
                <th>SISA ANGGARAN</th>
                <th>KATEGORI</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pengeluaran as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->jumlah_pengeluaran}}</td>
                    <td>{{$data->deskripsi}}</td>
                    <td>{{$data->anggaran->jumlah}}</td>
                    <td>{{$data->anggaran->jumlah - $data->jumlah_pengeluaran}}</td>
                    <td>{{$data->kategori->nama}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle mr-1" type="button" id="dropdownMenuButton3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="{{  route('pengeluaran.edit', $data->id) }}">Edit</a>
                                <form action="{{ route('pengeluaran.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item align-items-center" type="submit"
                                    onclick="return confirm('Apakah kamu yakin ingin menghapus kategori ini?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
              <tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
