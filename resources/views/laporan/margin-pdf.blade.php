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
                {{-- <th>No</th> --}}
                <th>Total Pemasukan</th>
                <th>Total Pengeluaran</th>
                <th>Margin</th>
                <th>Tanggal</th>
                {{-- <th>Keterangan</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                {{-- <td>{{ $key + 1 }}</td> --}}
                <td>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($totalMargin, 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</td>
                {{-- <td>{{ $pemasukan->deskripsi }}</td> --}}
            </tr>
        </tbody>
        <tfoot>
            <tr class="total">
                <td colspan="1">Total Margin</td>
                <td colspan="5" class="text-center">Rp {{ number_format($totalMargin, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ $currentDate }}</p>
    </div>
</body>
</html>
