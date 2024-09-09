<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerMobileController extends Controller
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
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('mobile.ekskul.ekskul', compact(['ekstrakulikuler']));
    }

    public function detail($id)
    {
        $ekstrakulikuler = Ekstrakulikuler::findOrFail($id);
        return view('mobile.ekskul.detail', compact(['ekstrakulikuler']));
    }
}
