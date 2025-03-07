<?php

namespace App\Http\Controllers;

use App\Models\Pengguna_1; // Gunakan PascalCase
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 100000000000;

        // Query dengan pencarian jika ada kata kunci
        $data = Pengguna_1::when($katakunci, function ($query) use ($katakunci) {
            return $query->where('id', 'like', "%$katakunci%")
                         ->orWhere('nama', 'like', "%$katakunci%")
                         ->orWhere('email', 'like', "%$katakunci%");
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
            'nama' => 'required',
            'email' => 'required',
        ]);

        Pengguna_1::create($request->all());

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        // Mengambil data berdasarkan ID, menggunakan find() karena lebih efisien
        $data = Pengguna_1::find($id);
    
        // Jika data tidak ditemukan, kembalikan ke halaman index dengan pesan error
        if (!$data) {
            return redirect()->route('pengguna_1.index')->with('error', 'Data tidak ditemukan');
        }
    
        // Tampilkan halaman edit dengan data yang ditemukan
        return view('pengguna_1.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        Pengguna_1::where('id', $id)->update($request->only(['nama', 'email']));

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $data = Pengguna_1::where('id', $id)->first();

        if (!$data) {
            return redirect()->route('pengguna_1.index')->with('error', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('pengguna_1.index')->with('success', 'Data berhasil dihapus');
    }
}
?>
