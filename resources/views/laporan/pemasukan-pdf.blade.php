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
                <th>Jumlah Pemasukan</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemasukans as $key => $pemasukan)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $pemasukan->kategori->nama }}</td>
                <td>Rp {{ number_format($pemasukan->jumlah_pemasukan, 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($pemasukan->created_at)->format('d-m-Y') }}</td>
                <td>{{ $pemasukan->deskripsi }}</td>
            </tr>
            @endforeach
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
