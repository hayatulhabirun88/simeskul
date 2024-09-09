<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::paginate(10);
        return view('web.kegiatan.kegiatan', compact(['kegiatan']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembina = Pembina::all();
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('web.kegiatan.create', compact(['ekstrakulikuler', 'pembina']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string',
            'foto_kegiatan' => 'required|image|mimes:jpg,png,gif,jpeg',
            'deskripsi' => 'required|string|max:255',
            'ekstrakulikuler' => 'required|integer',
            'pembina' => 'required|integer',
        ]);

        if ($request->file('foto_kegiatan')) {
            $namafile = md5($request->file('foto_kegiatan')->getClientOriginalName() . time()) . '.' . $request->file('foto_kegiatan')->getClientOriginalExtension();
            $request->file('foto_kegiatan')->move(public_path() . '/foto_kegiatan/', $namafile);
        } else {
            $namafile = "";
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'foto_kegiatan' => $namafile,
            'deskripsi' => $request->deskripsi,
            'ekstrakulikuler_id' => $request->ekstrakulikuler,
            'pembina_id' => $request->pembina,
        ]);

        return redirect()->to('/kegiatan')->with('success', 'Kegiatan Ekstrakulikuler Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $ekstrakulikuler = Ekstrakulikuler::all();
        $pembina = Pembina::all();
        return view('web.kegiatan.edit', compact(['kegiatan', 'ekstrakulikuler', 'pembina']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'nama_kegiatan' => 'required|string',
            'foto_kegiatan' => 'image|mimes:jpg,png,gif,jpeg',
            'deskripsi' => 'required|string|max:255',
            'ekstrakulikuler' => 'required|integer',
            'pembina' => 'required|integer',
        ]);

        if ($request->file('foto_kegiatan')) {
            @unlink(public_path('/foto_kegiatan/' . $kegiatan->foto_kegiatan));
            $namafile = md5($request->file('foto_kegiatan')->getClientOriginalName() . time()) . '.' . $request->file('foto_kegiatan')->getClientOriginalExtension();
            $request->file('foto_kegiatan')->move(public_path() . '/foto_kegiatan/', $namafile);
            $kegiatan->foto_kegiatan = $namafile;
        }

        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->ekstrakulikuler_id = $request->ekstrakulikuler;
        $kegiatan->pembina_id = $request->pembina;
        $kegiatan->update();

        return redirect()->to('/kegiatan')->with('success', 'Kegiatan Ekstrakulikuler Berhasil di Ubah');
    }

    public function search($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        @unlink(public_path('/foto_kegiatan/' . $kegiatan->foto_kegiatan));
        $kegiatan->delete();

        return redirect()->to('/kegiatan')->with('success', 'Data berhasil di hapus');
    }
}
