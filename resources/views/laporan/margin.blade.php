@extends('layouts.frontend.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Laporan Keuangan</h3>
                        <a href="{{ route('laporan.margin-pdf') }}" class="btn btn-primary">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Total Pemasukan</th>
                                    <th>Total Pengeluaran</th>
                                    <th>Margin</th>
                                    <th>Tanggal</th>
                                    {{-- <th>Keterangan</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($margin as $key => $pemasukan) --}}
                                <tr>
                                    {{-- <td>{{ $key + 1 }}</td> --}}
                                    <td>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($totalMargin, 0, ',', '.') }}</td>
                                    <td>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</td>
                                    {{-- <td>{{ $pemasukan->deskripsi }}</td> --}}
                                </tr>
                                {{-- @empty --}}
                                {{-- <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr> --}}
                                {{-- @endforelse --}}
                            </tbody>
                            <tfoot>
                                <tr class="font-weight-bold">
                                    <td colspan="1">Total Margin</td>
                                    <td colspan="5" class="text-center">Rp {{ number_format($totalMargin, 0, ',', '.') }}</td>
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
