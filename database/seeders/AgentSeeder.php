<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::create(['name' => 'Ajit']);
        Agent::create(['name' => 'Anwar']);
        Agent::create(['name' => 'Bijay']);
        Agent::create(['name' => 'Broker']);
        Agent::create(['name' => 'Dash']);
        Agent::create(['name' => 'Jitu']);
        Agent::create(['name' => 'Lalan']);
        Agent::create(['name' => 'Nasir']);
        Agent::create(['name' => 'Pintu']);
        Agent::create(['name' => 'PPPL']);
        Agent::create(['name' => 'Rafique']);
        Agent::create(['name' => 'Raju']);
        Agent::create(['name' => 'Saquib']);
        Agent::create(['name' => 'Shahid']);
        Agent::create(['name' => 'Tuklu']);
        Agent::create(['name' => 'Jaydeep']);
    }
}
