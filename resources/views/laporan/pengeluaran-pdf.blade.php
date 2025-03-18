<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pemasukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Laporan Keuangan</h2>
        <p>Tanggal: {{ $currentDate }}</p>
    </div>

    <table>
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
            <tr class="total">
                <td colspan="1">Total Pemasukan</td>
                <td colspan="5" class="text-center">Rp {{ number_format($totalAnggaran, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ $currentDate }}</p>
    </div>
</body>
</html>
