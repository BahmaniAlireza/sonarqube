<?php

use App\Models\Host;
use Illuminate\Database\Seeder;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $host = new Host();
        $host->title = "هاست معمولی";
        $host->storage = "500";
        $host->traffic = '5';
        $host->price = 49000;
        $host->save();


        $host = new Host();
        $host->title = "هاست برنزه";
        $host->storage = "1";
        $host->traffic = '10';
        $host->price = 89000;
        $host->save();


        $host = new Host();
        $host->title = "هاست نقره ای";
        $host->storage = "2";
        $host->traffic = '20';
        $host->price = 178000;
        $host->save();



        $host = new Host();
        $host->title = "هاست طلایی";
        $host->storage = "10";
        $host->traffic = '100';
        $host->price = 356000;
        $host->save();
    }
}
