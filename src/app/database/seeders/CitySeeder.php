<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('citys')->insert([
            ['city_name'=>'Muzaffarpur','state_id'=>1],
            ['city_name'=>'Samastipur','state_id'=>1],
            ['city_name'=>'Buxar','state_id'=>1],
            ['city_name'=>'Dumarown','state_id'=>1],
        ]);
    }

}