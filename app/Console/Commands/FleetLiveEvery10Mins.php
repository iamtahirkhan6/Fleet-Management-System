<?php

namespace App\Console\Commands;

use App\Models\Fleet;
use App\Models\FleetLive;
use App\Models\FleetVehicle;
use App\Models\FleetTripCatcher;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FleetLiveEvery10Mins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fleet:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the live location of the fleet in every 10 mins';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
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
        return $response[0];
    }
    
    public function handle()
    {
        $fleets = Fleet::all();
        foreach($fleets as $fleet)
        {
            foreach($fleet->vehicles as $vehicle)
            {
                $location = $this->getLiveLocation($vehicle->number);
                $fleetLive = FleetLive::updateOrCreate(
                    ['vehicleno' => $vehicle->number],
                    [
                        'outtype' => $location['outtype'],
                        'ttime' => $location['ttime'],
                        'rectime' => $location['rectime'],
                        'trips' => $location['trips'],
                        'rdev' => $location['rdev'],
                        'mineral' => $location['mineral'],
                        'sourcecode' => $location['sourcecode'],
                        'lessycode' => $location['lessycode'],
                        'vehiclespeed' => $location['vehiclespeed'],
                        'ignumber' => $location['ignumber'],
                        'gpsstatus' => $location['gpsstatus'],
                        'circle' => $location['circle'],
                        'starttime' => $location['starttime'],
                        'endtime' => $location['endtime'],
                        'destination' => $location['destination'],
                        'routename' => $location['routename'],
                        'latitude' => $location['latitude'],
                        'longitude' => $location['longitude'],
                        'imeino' => $location['imeino'],
                        'etpno' => $location['etpno'],
                        'vehcount' => $location['vehcount'],
                        'tripcount' => $location['tripcount'],
                        'intime' => $location['intime'],
                        'outtime' => $location['outtime'],
                        'rdevstarttime' => $location['rdevstarttime'],
                        'rdevendtime' => $location['rdevendtime'],
                        'rdevtime' => $location['rdevtime'],
                        'pollingtime' => $location['pollingtime'],
                        'company' => $location['company'],
                        'destcode' => $location['destcode'],
                        'time' => $location['time'],
                        'index' => $location['index'],
                        'source' => $location['source'],
                        'status' => $location['status'],
                        'location' => $location['location'],
                    ]
                );
                if(($location['etpno'] != "NA") && ($location['etpno'] != null))
                {

                }
                if($location['etpno'] != null && $location['etpno'] != "NA")
                $trip_catch = FleetTripCatcher::firstOrCreate(
                    ['etpno' => $location['etpno']],
                    [
                        'vehicleno' => $location['vehicleno'],
                        'source' => $location['source'],
                        'destination' => $location['destination'],
                        'starttime' => $location['starttime'],
                        'pollingtime' => $location['pollingtime'],
                    ]
                );
                sleep(5);
            }
            
        }
        return 0;
    }
}
