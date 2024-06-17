<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use App\Models\Presensi;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class PresensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pembina = Pembina::all();
        $ekstrakulikuler = Ekstrakulikuler::all();

        if ($request->input('ekstrakulikuler')) {
            $pendaftar = Pendaftar::where('ekstrakulikuler_id', $request->input('ekstrakulikuler'))->paginate(10);
        } else {
            $pendaftar = Pendaftar::paginate(10);

        }
        return view('web.presensi.presensi', compact(['pendaftar', 'ekstrakulikuler', 'pembina']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ajax_presensi(Request $request)
    {
        $request->validate([
            'tgl_presensi' => 'required|date',
            'status_kehadiran' => 'required|in:Hadir,Tidak Hadir',
            'ekstrakulikuler_id' => 'required|exists:ekstrakulikulers,id',
            'pendaftar_id' => 'required|exists:pendaftars,id',
            'pembina_id' => 'required|exists:pembinas,id',
        ]);

        $presensi = Presensi::updateOrCreate(
            [
                'tgl_presensi' => $request->tgl_presensi,
                'pendaftar_id' => $request->pendaftar_id,
            ],
            [
                'status_kehadiran' => $request->status_kehadiran,
                'ekstrakulikuler_id' => $request->ekstrakulikuler_id,
                'pembina_id' => $request->pembina_id,
            ]
        );

        return response()->json(['message' => 'Status updated successfully.', 'presensi' => $presensi]);
    }
}
