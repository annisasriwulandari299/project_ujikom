@extends('layouts.frontend.template')
@section('content')
<div class="row" id="table-hover-row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Table Kategori</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
            <a href="{{  route('kategori.create') }}" type="button" class="btn btn-primary round">Add +</a>
        </div>
        <!-- table hover -->
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>CATATAN</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-bold-500">{{$data->nama}}</td>
                    <td>{{$data->catatan}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle mr-1" type="button" id="dropdownMenuButton3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="{{  route('kategori.edit', $data->id) }}">Edit</a>
                                <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
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