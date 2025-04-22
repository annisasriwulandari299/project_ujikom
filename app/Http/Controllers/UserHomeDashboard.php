<?php

namespace App\Http\Controllers;
use App\Models\Anggaran;
use Illuminate\Http\Request;

class UserHomeDashboard extends Controller
{
    public function index()
    {
        // Calculate total anggaran (sum of all amounts)
        $totalAnggaran = Anggaran::sum('jumlah');

        // Get latest 5 transactions for the table
        $recentTransactions = Anggaran::with('user')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Since we don't have type column, we can create dummy data for the chart
        $totalPemasukan = 0;
        $totalPengeluaran = 0;

        return view('dashboard', compact(
            'totalAnggaran',
            'totalPemasukan',
            'totalPengeluaran',
            'recentTransactions'
        ));
    }

}
