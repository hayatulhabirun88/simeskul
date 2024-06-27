<?php

namespace App\Http\Controllers\Mobile;

use App\Models\Lomba;
use App\Models\Jadwal;
use App\Models\Gallery;
use App\Models\Orangtua;
use App\Models\Presensi;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeMobileController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!auth()->check()) {
                return redirect('mobile/login');
            }
            return $next($request);
        });
    }

    public function index()
    {
        $lomba = Lomba::orderBy('id', 'desc')->paginate(10);
        $gallery = Gallery::orderBy('id', 'desc')->paginate(10);
        $jadwal = Jadwal::orderBy('id', 'desc')->paginate(10);
        $user_id = auth()->user()->id;

        $query = Presensi::leftJoin('pendaftars', 'pendaftars.id', '=', 'presensis.pendaftar_id')
            ->leftJoin('pembinas', 'pembinas.id', '=', 'presensis.pembina_id')
            ->leftJoin('ekstrakulikulers', 'ekstrakulikulers.id', '=', 'presensis.ekstrakulikuler_id')
            ->orderBy('presensis.id', 'desc')
            ->select(
                'pembinas.nama_pembina as nama_pembina',
                'ekstrakulikulers.nama_ekstrakulikuler as nama_ekstrakulikuler',
                'presensis.tgl_presensi',
                'presensis.status_kehadiran'
            );

        if (auth()->user()->level == "orang_tua") {
            $orangtua = Orangtua::where('user_id', $user_id)->first();
            $query->where('presensis.pendaftar_id', $orangtua->pendaftar_id);
        } else {
            $query->where('pendaftars.user_id', $user_id);
        }

        $presensi = $query->paginate(10);

        return view('mobile.home.home', compact(['gallery', 'presensi', 'jadwal', 'lomba']));
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/mobile/login');
    }

    public function setting()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        if (auth()->user()->level == "siswa") {
            $datasetting = Pendaftar::where('user_id', auth()->user()->id)->first();
        } else {
            $datasetting = Orangtua::where('user_id', auth()->user()->id)->first();
        }
        return view('mobile.home.setting', compact(['ekstrakulikuler', 'datasetting']));
    }

}
