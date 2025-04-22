<?php
namespace App\Models;

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Anggaran::query();

        if ($request->filled('date_from') && $request->filled('date_to')) {
            $from = Carbon::parse($request->date_from)->startOfDay();
            $to   = Carbon::parse($request->date_to)->endOfDay();

            $query->whereBetween('created_at', [$from, $to]);
        }

        $anggarans     = $query->orderBy('created_at', 'desc')->get();
        $totalAnggaran = $anggarans->sum('jumlah');
        $currentDate   = Carbon::now()->format('d-m-Y');
        $pengeluarans  = Pengeluaran::all();

        return view('laporan.anggaran', compact('anggarans', 'totalAnggaran', 'currentDate', 'pengeluarans'));
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
            'anggarans'     => $anggarans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate'   => $currentDate,
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-anggaran-' . $currentDate . '.pdf');
    }
    public function pemasukan(Request $request)
    {
        $query = Pemasukan::with('kategori')->orderBy('created_at', 'desc');

        if ($request->start_date && $request->end_date) {
            $start = Carbon::parse($request->start_date)->startOfDay();
            $end   = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$start, $end]);
        }

        $pemasukans     = $query->get();
        $totalPemasukan = $pemasukans->sum('jumlah_pemasukan');
        $currentDate    = Carbon::now()->format('d-m-Y');

        return view('laporan.pemasukan', compact('pemasukans', 'totalPemasukan', 'currentDate'));
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
            'pemasukans'    => $pemasukans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate'   => $currentDate,
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-pemasukan-' . $currentDate . '.pdf');
    }
    public function pengeluaran(Request $request)
    {
        $query = Pengeluaran::with('kategori')->orderBy('created_at', 'desc');

        if ($request->start_date && $request->end_date) {
            $start = Carbon::parse($request->start_date)->startOfDay();
            $end   = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$start, $end]);
        }

        $pengeluarans  = $query->get();
        $totalAnggaran = $pengeluarans->sum('jumlah_pengeluaran');
        $currentDate   = Carbon::now()->format('d-m-Y');

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
            'pengeluarans'  => $pengeluarans,
            'totalAnggaran' => $totalAnggaran,
            'currentDate'   => $currentDate,
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-pengeluaran-' . $currentDate . '.pdf');
    }

    public function margin(Request $request)
    {
        $start = $request->start_date ? Carbon::parse($request->start_date)->startOfDay() : null;
        $end   = $request->end_date ? Carbon::parse($request->end_date)->endOfDay() : null;

        $pemasukansQuery   = Pemasukan::orderBy('created_at', 'desc');
        $pengeluaransQuery = Pengeluaran::orderBy('created_at', 'desc');

        if ($start && $end) {
            $pemasukansQuery->whereBetween('created_at', [$start, $end]);
            $pengeluaransQuery->whereBetween('created_at', [$start, $end]);
        }

        $pemasukans   = $pemasukansQuery->get();
        $pengeluarans = $pengeluaransQuery->get();

        $totalPemasukan   = $pemasukans->sum('jumlah_pemasukan');
        $totalPengeluaran = $pengeluarans->sum('jumlah_pengeluaran');
        $totalMargin      = $totalPemasukan - $totalPengeluaran;
        $currentDate      = Carbon::now()->format('d-m-Y');

        return view('laporan.margin', compact(
            'pemasukans',
            'pengeluarans',
            'totalMargin',
            'totalPemasukan',
            'totalPengeluaran',
            'currentDate'
        ));
    }

    public function marginPDF()
    {
        $pemasukans       = Pemasukan::orderBy('created_at', 'desc')->get();
        $totalPemasukan   = $pemasukans->sum('jumlah_pemasukan');
        $pengeluarans     = Pengeluaran::orderBy('created_at', 'desc')->get();
        $totalPengeluaran = $pengeluarans->sum('jumlah_pengeluaran');
        $totalMargin      = $pemasukans->sum('jumlah_pemasukan') - $pengeluarans->sum('jumlah_pengeluaran');
        // Get current date
        $currentDate = Carbon::now()->format('d-m-Y');

        // Generate PDF
        $pdf = PDF::loadView('laporan.margin-pdf', [
            'pemasukans'       => $pemasukans,
            'pengeluarans'     => $pengeluarans,
            'totalMargin'      => $totalMargin,
            'totalPemasukan'   => $totalPemasukan,
            'totalPengeluaran' => $totalPengeluaran,
            'currentDate'      => $currentDate,
        ]);

        // Download PDF file with name
        return $pdf->download('laporan-margin-' . $currentDate . '.pdf');
    }
}