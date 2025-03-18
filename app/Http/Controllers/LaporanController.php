<?php

namespace App\Models;

namespace App\Http\Controllers;
use App\Models\Anggaran;
use App\Models\Laporan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\User;
use Carbon\Carbon;
// use Barryvdh\DomPDF\Facade\PDF;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $anggarans = Anggaran::orderBy('created_at', 'desc')->get();
        $totalAnggaran = $anggarans->sum('jumlah');
        $currentDate = Carbon::now()->format('d-m-Y');

        return view('laporan.anggaran', compact('anggarans', 'totalAnggaran', 'currentDate'));
    }

    public function generatePDF()
    {
        // Get all anggaran data
        $anggarans = Anggaran::orderBy('created_at', 'desc')->get();

        // Calculate total amount
        $totalAnggaran = $anggarans->sum('jumlah');

        // Get current date
        $currentDate = Carbon::now()->format('d-m-Y');

        // Generate PDF
        $pdf = PDF::loadView('laporan.anggaran-pdf', [
            'anggarans' => $anggarans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate' => $currentDate
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-anggaran-' . $currentDate . '.pdf');
    }
    public function pemasukan()
    {
        $pemasukans = Pemasukan::orderBy('created_at', 'desc')->get();
        $totalAnggaran = $pemasukans->sum('jumlah_pemasukan');
        $currentDate = Carbon::now()->format('d-m-Y');

        return view('laporan.pemasukan', compact('pemasukans', 'totalAnggaran', 'currentDate'));
    }

    public function pemasukanPDF()
    {
        // Get all anggaran data
        $pemasukans = Pemasukan::orderBy('created_at', 'desc')->get();

        // Calculate total amount
        $totalAnggaran = $pemasukans->sum('jumlah_pemasukan');

        // Get current date
        $currentDate = Carbon::now()->format('d-m-Y');

        // Generate PDF
        $pdf = PDF::loadView('laporan.pemasukan-pdf', [
            'pemasukans' => $pemasukans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate' => $currentDate
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-pemasukan-' . $currentDate . '.pdf');
    }
    public function pengeluaran()
    {
        $pengeluarans = Pengeluaran::orderBy('created_at', 'desc')->get();
        $totalAnggaran = $pengeluarans->sum('jumlah_pengeluaran');
        $currentDate = Carbon::now()->format('d-m-Y');

        return view('laporan.pengeluaran', compact('pengeluarans', 'totalAnggaran', 'currentDate'));
    }

    public function pengeluaranPDF()
    {
        // Get all anggaran data
        $pengeluarans = Pengeluaran::orderBy('created_at', 'desc')->get();

        // Calculate total amount
        $totalAnggaran = $pengeluarans->sum('jumlah_pengeluaran');

        // Get current date
        $currentDate = Carbon::now()->format('d-m-Y');

        // Generate PDF
        $pdf = PDF::loadView('laporan.pengeluaran-pdf', [
            'pengeluarans' => $pengeluarans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate' => $currentDate
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-pengeluaran-' . $currentDate . '.pdf');
    }
    public function margin()
    {
        $pemasukans = Pemasukan::orderBy('created_at', 'desc')->get();
        $totalPemasukan = $pemasukans->sum('jumlah_pemasukan');
        $pengeluarans = Pengeluaran::orderBy('created_at', 'desc')->get();
        $totalPengeluaran = $pengeluarans->sum('jumlah_pengeluaran');
        $totalMargin = $pemasukans->sum('jumlah_pemasukan') - $pengeluarans->sum('jumlah_pengeluaran');
        $currentDate = Carbon::now()->format('d-m-Y');

        return view('laporan.margin', compact('pemasukans', 'pengeluarans', 'totalMargin', 'totalPemasukan', 'totalPengeluaran', 'currentDate'));
    }

    public function marginPDF()
    {
        $pemasukans = Pemasukan::orderBy('created_at', 'desc')->get();
        $totalPemasukan = $pemasukans->sum('jumlah_pemasukan');
        $pengeluarans = Pengeluaran::orderBy('created_at', 'desc')->get();
        $totalPengeluaran = $pengeluarans->sum('jumlah_pengeluaran');
        $totalMargin = $pemasukans->sum('jumlah_pemasukan') - $pengeluarans->sum('jumlah_pengeluaran');
        // Get current date
        $currentDate = Carbon::now()->format('d-m-Y');

        // Generate PDF
        $pdf = PDF::loadView('laporan.margin-pdf', [
            'pemasukans' => $pemasukans,
            'pengeluarans' => $pengeluarans,
            'totalMargin' => $totalMargin,
            'totalPemasukan' => $totalPemasukan,
            'totalPengeluaran' => $totalPengeluaran,
            'currentDate' => $currentDate
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-margin-' . $currentDate . '.pdf');
    }
}
