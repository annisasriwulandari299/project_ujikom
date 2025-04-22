<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Notifikasi Keuangan</title>
    <style>
        body {
            background-color: #f4f6f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .email-wrapper {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .header {
            background-color: #FF69B4;
            color: white;
            padding: 20px 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 30px;
        }

        /* ✅ Warna teks Detail Pengeluaran diubah jadi pink */
        .content h2 {
            color: #FF69B4;
            margin-top: 0;
        }

        .info {
            margin: 20px 0;
        }

        .info p {
            font-size: 16px;
            margin: 8px 0;
        }

        .highlight-box {
            background-color: #fef3f3;
            border-left: 5px solid #ff4d4f;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        .footer {
            background-color: #f1f3f5;
            padding: 20px 30px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }

        @media (max-width: 600px) {
            .content,
            .footer,
            .header {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <div class="header">
            <h1>
                💸 Pengeluaran Baru Tercatat
            </h1>
        </div>
        <div class="content">
            <h2>Detail Pengeluaran</h2>
            <div class="info">
                <p><strong>Jumlah:</strong> Rp{{ number_format($jumlah, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong> {{ $keterangan ?? '-' }}</p>
                <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}</p>
            </div>

            <div class="highlight-box">
                <strong>🔔 Anggaran Tersisa:</strong><br>
                Rp{{ number_format($anggaran ?? 0, 0, ',', '.') }}
            </div>
            <p>Perhatikan penggunaan anggaran Anda. Tetap hemat dan bijak dalam berbelanja 💡</p>
            <p>Terima kasih telah mencatat keuangan Anda. Terus pantau pemasukan untuk meraih tujuan finansial Anda! 🚀
            </p>
        </div>
        <div class="footer">
            Email ini dikirim otomatis oleh sistem SmartMoney. Jangan membalas email ini.
        </div>
    </div>
</body>

</html>
