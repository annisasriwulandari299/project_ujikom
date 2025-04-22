@extends('layouts.frontend.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Laporan Keuangan</h3>
                        <a href="{{ route('laporan.anggaran-pdf') }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="GET" action="{{ route('laporan.anggaran') }}" class="mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="start_date">Tanggal Awal</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request('start_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="end_date">Tanggal Akhir</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                        <a href="{{ route('laporan.anggaran') }}" class="btn btn-secondary">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengguna</th>
                                    <th>Nama Anggaran</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($anggarans as $key => $anggaran)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $anggaran->user->username }}</td>
                                    <td>{{ $anggaran->nama_anggaran }}</td>
                                    <td>Rp {{ number_format($anggaran->jumlah, 0, ',', '.') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($anggaran->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ $anggaran->keterangan }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr class="font-weight-bold">
                                    <td colspan="1">Total Anggaran</td>
                                    <td colspan="5" class="text-center">Rp {{ number_format($totalAnggaran, 0, ',', '.') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="card-footer text-muted text-right">
                    Tanggal Cetak: {{ $currentDate }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection