<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\User;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        $user = User::all();
        $anggaran = Anggaran::all();
        $pemasukan = Pemasukan::all();
        $pengeluaran = Pengeluaran::all();
        return view('anggaran.index', compact('anggaran', 'pemasukan', 'pengeluaran', 'user'));
    }

    public function create()
    {
        $user = User::all();
        return view('anggaran.create', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'nama_anggaran' => 'required|string|max:255',
            'user_id' => 'required|integer',

        ]);

        $anggaran = new Anggaran();
        $anggaran->jumlah = $request->jumlah;
        $anggaran->nama_anggaran = $request->nama_anggaran;
        $anggaran->user_id = $request->user_id;
        $anggaran->save();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil ditambahkan');
    }

    public function show($id)
    {
        $anggaran = Anggaran::with(['user', 'kategori'])->findOrFail($id);
        return view('anggaran.show', compact('anggaran'));
    }

    public function edit($id)
    {
        $user = User::all();
        $anggaran = Anggaran::findOrFail($id);
        return view('anggaran.edit', compact('anggaran', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'nama_anggaran' => 'required|string|max:255',
            'user_id' => 'required|integer',
        ]);

        $anggaran = Anggaran::findOrFail($id);
        $anggaran->jumlah = $request->jumlah;
        $anggaran->nama_anggaran = $request->nama_anggaran;
        $anggaran->user_id = $request->user_id;
        $anggaran->save();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $anggaran = Anggaran::findOrFail($id);
        $anggaran->delete();

        return redirect()->route('anggaran.index')->with('success', 'Data anggaran berhasil dihapus');
    }
}
