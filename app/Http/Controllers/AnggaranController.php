<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        $anggaran = Anggaran::all();
        $pemasukan = Pemasukan::all();
        $pengeluaran = Pengeluaran::all();
        return view('anggaran.index', compact('anggaran', 'pemasukan', 'pengeluaran'));
    }

    public function create()
    {
        return view('anggaran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'kategori_id' => 'required|exists:kategori,id',
            'jumlah' => 'required|integer',
        ]);

        $anggaran = new Anggaran();
        $anggaran->user_id = $request->user_id;
        $anggaran->kategori_id = $request->kategori_id;
        $anggaran->jumlah = $request->jumlah;
        $angaran->save();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil ditambahkan');
    }

    public function show($id)
    {
        $anggaran = Anggaran::with(['user', 'kategori'])->findOrFail($id);
        return view('anggaran.show', compact('anggaran'));
    }

    public function edit($id)
    {
        $anggaran = Anggaran::findOrFail($id);
        return view('anggaran.edit', compact('anggaran'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'kategori_id' => 'required|exists:kategori,id',
            'jumlah' => 'required|integer',
        ]);

        $anggaran = Anggaran::findOrFail($id);
        $anggaran->user_id = $request->user_id;
        $anggaran->kategori_id = $request->kategori_id;
        $anggaran->jumlah = $request->jumlah;
        $angaran->save();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $anggaran = Anggaran::findOrFail($id);
        $anggaran->delete();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil dihapus');
    }
}