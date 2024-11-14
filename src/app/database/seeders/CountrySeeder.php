<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('country')->insert([
            ['name'=>'India'],
            ['name'=>'Nepal'],
            ['name'=>'Pakistan'],
            ['name'=>'United States of America'],
        ]);
    }

}