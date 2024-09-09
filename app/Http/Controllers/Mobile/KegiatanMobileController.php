<?php

namespace App\Http\Controllers\Mobile;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KegiatanMobileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('check.dart');
        $this->middleware(function ($request, $next) {
            if (!auth()->check()) {
                return redirect('mobile/login');
            }
            return $next($request);
        });
    }

    public function index()
    {
        $kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(10);
        return view('mobile.kegiatan.kegiatan', compact(['kegiatan']));
    }
}
