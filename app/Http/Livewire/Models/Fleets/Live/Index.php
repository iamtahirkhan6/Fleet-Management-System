<?php

namespace App\Http\Livewire\Models\Fleets\Live;

use App\Domain\Fleet\Models\Fleet;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Domain\Fleet\Models\FleetVehicle;
use Illuminate\Support\Facades\Http;

class Index extends Component
{
    public $fleet;
    public $vehicles;
    public $vehicles_data = array();
    public $reloaded_n = 0;

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
        $response = $response->json();
        return json_decode(json_encode($response[0]));
    }

    public function fetchVehicle($number)
    {
        $this->vehicles_data[$number] = [];
        $this->vehicles_data[$number] = $this->getLiveLocation($number);
    }

    public function mount()
    {
        $this->vehicles = FleetVehicle::all()->where('fleet_id', $this->fleet->id);

    }

    public function render()
    {
        return view('livewire.models.fleets.live.index', ["vehicles" => $this->vehicles]);
    }
}
