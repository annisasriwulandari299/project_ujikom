@extends('layouts.frontend.template')
@section('content')
<div class="row" id="table-hover-row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Table Anggaran</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
            <a href="{{  route('anggaran.create') }}" type="button" class="btn btn-primary round">Add +</a>
        </div>
        <!-- table hover -->
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th>NO</th>
                <th>JUMLAH</th>
                <th>NAMA</th>
                <th>USER</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($anggaran as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->jumlah}}</td>
                    <td>{{$data->nama_anggaran}}</td>
                    <td>{{$data->user->username}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle mr-1" type="button" id="dropdownMenuButton3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="{{  route('anggaran.edit', $data->id) }}">Edit</a>
                                <form action="{{ route('anggaran.destroy', $data->id) }}" method="POST">
                                <div class="form-group">
                               {{-- <label for="basicInput">Nama User</label>
                               <select name="user_id" class="form-control" id="">
                               <option value="" selected disabled >-- Pilih User --</option>
                                @foreach($user as $data)
                               <option value="{{ $data->id }}">{{ $data->username }}</option>
                              @endforeach
                              </select> --}}
                         </div>
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
