<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Dokter;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function data()
    {
        $layanan = Layanan::get();
        return view('dokter.index', compact('layanan'));
    }
}
