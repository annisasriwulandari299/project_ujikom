<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Anggaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('admin.pengeluaran.index', compact('pengeluaran'));
    }

    public function create()
    {
        $anggaran = Anggaran::all();
        return view('pengeluaran.create', compact('anggaran'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'deskripsi' => 'nullable',
            'anggaran_id' => 'required|exists:anggaran,id',
        ]);

        $pengeluaran = new Pengeluaran();
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->deskripsi = $request->deskripsi;
        $pengeluaran->anggaran_id = $request->anggaran_id;
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
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'deskripsi' => 'nullable',
            'anggaran_id' => 'required|exists:anggaran,id',
        ]);

        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->deskripsi = $request->deskripsi;
        $pengeluaran->anggaran_id = $request->anggaran_id;
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