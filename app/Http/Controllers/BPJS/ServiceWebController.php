<?php

namespace App\Http\Controllers\BPJS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServiceWebController extends Controller
{
    protected $ipLuarSph;

    public function __construct()
    {
        $this->ipLuarSph = 'http://180.250.33.131/ws_bpjs_v2/public/api/';
    }

    public function getToken(Request $request)
    {
        return Http::accept('application/json')
        ->post($this->ipLuarSph . 'login', [
            'username' => $request->header('x-username'),
            'password' => $request->header('x-password')
        ]);
    }

    public function FunctionName()
    {
        # code...
    }
}
