<?php

namespace App\Domain\Fleet\Controllers;

use App\Domain\Fleet\Models\Fleet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FleetVehicleLocationController extends Controller
{
    public function getLiveLocation($number)
    {
        $link = "http://vts.orissaminerals.gov.in/orsacwebservice/rest/CallService/etptriplivedata";
        $response = Http::asForm()->withHeaders([
            'Host' => 'vts.orissaminerals.gov.in',
            'Connection' => 'keep-alive',
            'Accept' => 'application/json, text/plain, */*',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 Edg/87.0.664.66',
            'Referer' => 'http://vts.orissaminerals.gov.in/checketp/',
            'Accept-Encoding' => 'gzip, deflate',
            'Accept-Language' => 'en-US,en;q=0.9',
            'Cookie' => 'JSESSIONID=97E0E020B0AD30FDCBFB932306AD23A8',
        ])->get($link,[
            'vehicleno' => $number,
            'ip' => '157.48.215.133',
            'browsername' => 'Chrome',
            'browserversion' => '87.0.4280.88',
            'opersatingsys' => 'Windows',
            'osversion' => '10'
        ]);

        return $response->json();
    }
}
