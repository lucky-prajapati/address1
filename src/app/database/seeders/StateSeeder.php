<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->insert([
            ['state_name'=>'Bihar','country_id'=>1],
            ['state_name'=>'Utter Perdesh','country_id'=>1],
            ['state_name'=>'Panjab','country_id'=>1],
            ['state_name'=>'Delhi','country_id'=>1],
        ]);
    }

}