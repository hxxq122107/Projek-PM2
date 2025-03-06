<?php

namespace App\Http\Controllers;

use App\Models\Pengguna_1; // Gunakan PascalCase
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;

        // Query dengan pencarian jika ada kata kunci
        $data = Pengguna_1::when($katakunci, function ($query) use ($katakunci) {
            return $query->where('nim', 'like', "%$katakunci%")
                         ->orWhere('nama', 'like', "%$katakunci%")
                         ->orWhere('jurusan', 'like', "%$katakunci%");
        })->paginate($jumlahbaris);

        return view('pengguna_1.index', compact('data'));
    }

    public function create()
    {
        return view('pengguna_1.create'); // Tidak perlu mengirim ['data' => null] karena form kosong
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'bail|required|unique:pengguna_1,nim',
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        Pengguna_1::create($request->all());

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $data = Pengguna_1::where('nim', $id)->first();

        if (!$data) {
            return redirect()->route('pengguna_1.index')->with('error', 'Data tidak ditemukan');
        }

        return view('pengguna_1.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
        ]);

        Pengguna_1::where('nim', $id)->update($request->only(['nama', 'jurusan']));

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $data = Pengguna_1::where('nim', $id)->first();

        if (!$data) {
            return redirect()->route('pengguna_1.index')->with('error', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil dihapus');
    }
}
?>
