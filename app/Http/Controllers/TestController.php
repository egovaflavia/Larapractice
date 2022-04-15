<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    protected $sph;

    public function __construct(){
        $this->sph = 'http://180.250.33.131/ws_bpjs_v2/public/api/';
    }

    public function getMethod()
    {
        $client = new Client();
        $request = $client->get('https://httpbin.org/get');
        $response = $request->getBody()->getContents();

        return $response;
    }

    public function getHttp(Request $request)
    {
        return Http::accept('application/json')
            ->post($this->sph . 'login',[
                'username' => $request->header('x-username'),
                'password' => $request->header('x-password'),
            ]);
    }
}
