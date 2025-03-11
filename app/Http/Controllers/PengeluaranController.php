<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Anggaran;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::with('anggaran', 'kategori')->get();

        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function create()
    {
        $anggaran = Anggaran::all();
        $kategori = Kategori::all();

        return view('pengeluaran.create', compact('anggaran', 'kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah_pengeluaran' => 'required|integer',
            'deskripsi' => 'nullable',
            'anggaran_id' => 'required|nullable',
            'kategori_id' => 'required',
        ]);

        $pengeluaran = new Pengeluaran();
        $pengeluaran->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $pengeluaran->deskripsi = $request->deskripsi;
        $pengeluaran->anggaran_id = $request->anggaran_id;
        $pengeluaran->kategori_id = $request->kategori_id;

        $pengeluaran->save();
        return redirect()->route('pengeluaran.index')->with('success', 'Data pengeluaran berhasil ditambahkan');
    }

    public function show($id)
    {
        $pengeluaran = Pengeluaran::with('anggaran')->findOrFail($id);
        return view('pengeluaran.show', compact('pengeluaran'));
    }

    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $anggaran = Anggaran::all();
        $kategori = Kategori::all();

        return view('pengeluaran.edit', compact('pengeluaran', 'anggaran', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah_pengeluaran' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'anggaran_id' => 'required|exists:anggarans,id',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $pengeluaran = Pengeluaran::findOrFail($id);
        $anggaran = $pengeluaran->anggaran;
        $anggaran->jumlah = $anggaran->jumlah + $pengeluaran->jumlah_pengeluaran - $request->jumlah_pengeluaran;
        $anggaran->save();

        $pengeluaran->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $pengeluaran->deskripsi = $request->deskripsi;
        $pengeluaran->anggaran_id = $request->anggaran_id;
        $pengeluaran->kategori_id = $request->kategori_id;

        $pengeluaran->save();

        return redirect()->route('pengeluaran.index')->with('success', 'Data pengeluaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();

        return redirect()->route('pengeluaran.index')->with('success', 'Data pengeluaran berhasil dihapus');
    }
}
