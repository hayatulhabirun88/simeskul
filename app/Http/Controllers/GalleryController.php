<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Album::paginate(10);
        return view('web.gallery.gallery', compact(['gallery']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('web.gallery.create', compact(['ekstrakulikuler']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_album' => 'required|string',
            'ekstrakulikuler' => 'required',
            'foto.*' => 'image|mimes:jpg,png,gif,jpeg'
        ]);

        $album = Album::create([
            'nama_album' => $request->nama_album,
            'ekstrakulikuler_id' => $request->ekstrakulikuler
        ]);

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $photo) {
                $namafile = md5($photo->getClientOriginalName() . time()) . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path() . '/foto/', $namafile);
                Gallery::create([
                    'foto' => $namafile,
                    'album_id' => $album->id
                ]);
            }
        }

        return redirect()->to('/eskul/gallery')->with('success', 'Data berhasil di Simpan');
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
        $album = Album::findOrFail($id);
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('web.gallery.edit', compact(['album', 'ekstrakulikuler']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::findOrFail($id);

        $request->validate([
            'nama_album' => 'required|string',
            'ekstrakulikuler' => 'required'
        ]);

        $album->nama_album = $request->nama_album;
        $album->ekstrakulikuler_id = $request->ekstrakulikuler;
        $album->save();

        return redirect()->to('/eskul/gallery')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::findOrFail($id);

        $album->delete();

        return redirect()->to('/eskul/gallery')->with('success', 'Data berhasil di hapus');
    }
}
