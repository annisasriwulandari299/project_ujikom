<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Anggaran;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::with('kategori')->get();
        return view('pemasukan.index', compact('pemasukan'));

    }

    public function create()
    {
        $anggaran = Anggaran::all();
        $kategori = Kategori::all();

        return view('pemasukan.create', compact('anggaran', 'kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah_pemasukan' => 'required|integer',
            'deskripsi' => 'nullable',
            // 'anggaran_id' => 'required|nullable',
            'kategori_id' => 'required',
        ]);

        $pemasukan = new Pemasukan();
        $pemasukan->jumlah_pemasukan = $request->jumlah_pemasukan;
        $pemasukan->deskripsi = $request->deskripsi;
        // $pemasukan->anggaran_id = $request->anggaran_id;
        $pemasukan->kategori_id = $request->kategori_id;

        $pemasukan->save();
        return redirect()->route('pemasukan.index')->with('success', 'Data pemasukan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pemasukan = Pemasukan::with('anggaran')->findOrFail($id);
        return view('pemasukan.show', compact('pemasukan'));
    }

    public function edit($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $anggaran = Anggaran::all();
        $kategori = Kategori::all();

        return view('pemasukan.edit', compact('pemasukan', 'anggaran', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah_pemasukan' => 'required|integer',
            'deskripsi' => 'nullable|string',
            // 'anggaran_id' => 'required|exists:anggarans,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $pemasukan = Pemasukan::findOrFail($id);
        // $anggaran = $pemasukan->anggaran;
        // $anggaran->jumlah = $anggaran->jumlah - $pemasukan->jumlah_pemasukan + $request->jumlah_pemasukan;
        // $anggaran->save();

        $pemasukan->jumlah_pemasukan = $request->jumlah_pemasukan;
        $pemasukan->deskripsi = $request->deskripsi;
        // $pemasukan->anggaran_id = $request->anggaran_id;
        $pemasukan->kategori_id = $request->kategori_id;

        $pemasukan->save();
        return redirect()->route('pemasukan.index')->with('success', 'Data pemasukan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->delete();

        return redirect()->route('pemasukan.index')->with('success', 'Data pemasukan berhasil dihapus');
    }

    // public function laporanChart()
    // {
    //     $pemasukan = Pemasukan::where('tipe', 'positif')->sum('jumlah');
    //     $pengeluaran = Pemasukan::where('tipe', 'negatif')->sum('jumlah');

    //     $chart = Charts::create('bar', 'chartjs')
    //     ->title("Laporan Keuangan")
    //     ->labels(['Pemasukan', 'Pengeluaran'])
    //     ->values([$pemasukan, $pengeluaran])
    //     ->dimensions(500, 300)
    //     ->responsive(true);

    //     return view('laporan', compact('chart'));
    // }
}
