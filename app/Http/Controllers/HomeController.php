<?php

namespace App\Http\Controllers;

use App\Models\paket_proyek; // Pastikan Anda mengimpor model yang benar
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $proyeks = paket_proyek::all(); // Ambil semua data proyek
        return view('pages.admin.home', compact('proyeks'));
    }
}
