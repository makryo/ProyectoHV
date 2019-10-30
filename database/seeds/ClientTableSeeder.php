<?php

use Illuminate\Database\Seeder;
use App\Client;
class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->fullname = "Mariana";
        $client->cellphone = "50669585";
        $client->email = "mar23@gmail.com";
        $client->address = "colonia san esteban";
    }
}
