<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Anggaran;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::all();
        return view('pemasukan.index', compact('pemasukan'));
    }

    public function create()
    {
        $anggaran = Anggaran::all();
        return view('pemasukan.create', compact('anggaran'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'deskripsi' => 'nullable',
            'anggaran_id' => 'required|exists:anggaran,id',
        ]);

        $pemasukan = new Pemasukan();
        $pemasukan->jumlah = $request->jumlah;
        $pemasukan->deskripsi = $request->deskripsi;
        $pemasukan->anggaran_id = $request->anggaran_id;
        $pemasukan->save();

        $anggaran = Anggaran::find($request->id_anggaran);
        $anggaran->total += $request->jumlah_pemasukan;
        $anggaran->save();
        Alert::succes('Success', 'data berhasil ditambahkan')->autoClose(2000);

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
        return view('pemasukan.edit', compact('pemasukan', 'anggaran'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah' => 'required|integer',
            'deskripsi' => 'nullable',
            'anggaran_id' => 'required|exists:anggaran,id',
        ]);

        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->jumlah = $request->jumlah;
        $pemasukan->deskripsi = $request->deskripsi;
        $pemasukan->anggaran_id = $request->anggaran_id;
        $pemasukan->save();

        return redirect()->route('pemasukan.index')->with('success', 'Data pemasukan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->delete();

        return redirect()->route('pemasukan.index')->with('success', 'Data pemasukan berhasil dihapus');
    }
}