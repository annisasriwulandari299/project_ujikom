<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Anggaran;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data pemasukan berdasarkan bulan
        $pemasukan = DB::table('pemasukans')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(jumlah_pemasukan) as total'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

// Mengambil data pengeluaran berdasarkan bulan
        $pengeluaran = DB::table('pengeluarans')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(jumlah_pengeluaran) as total'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

// Menyiapkan data untuk chart
        $months          = [];
        $pemasukanData   = [];
        $pengeluaranData = [];

// Menyusun data pemasukan berdasarkan bulan
        foreach ($pemasukan as $item) {
            $monthName = Carbon::create()->month($item->month)->format('F');
            if (! in_array($monthName, $months)) {
                $months[] = $monthName;
            }
            $pemasukanData[] = $item->total;
        }

// Menyusun data pengeluaran berdasarkan bulan
        foreach ($pengeluaran as $item) {
            // Pastikan untuk menambahkan data pengeluaran ke array
            $pengeluaranData[] = $item->total;
        }
        return view('dashboard', compact('months', 'pemasukanData', 'pengeluaranData'));
    }

    public function show()
    {
        return view('dashboard.show');
    }

    public function edit()
    {
        return view('dashboard.edit');
    }
}
