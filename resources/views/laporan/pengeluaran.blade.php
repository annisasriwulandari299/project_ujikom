@extends('layouts.frontend.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Laporan Keuangan</h3>
                        <a href="{{ route('laporan.pengeluaran-pdf') }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kategori</th>
                                    <th>Jumlah Pengeluaran</th>
                                    {{-- <th>Jumlah Anggaran</th> --}}
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pengeluarans as $key => $pengeluaran)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pengeluaran->kategori->nama }}</td>
                                    <td>Rp {{ number_format($pengeluaran->jumlah_pengeluaran, 0, ',', '.') }}</td>
                                    {{-- <td>Rp {{ number_format($pengeluaran->anggaran->jumlah, 0, ',', '.') }}</td> --}}
                                    <td>{{ \Carbon\Carbon::parse($pengeluaran->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ $pengeluaran->deskripsi }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr class="font-weight-bold">
                                    <td colspan="1">Total Pengeluaran</td>
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
