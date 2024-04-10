<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->delete();
        $properties = array(
            array('category' => "Casque"),
            array('category' => "Ecouteur"),
            array('category' => "Chargeur"),
            array('category' => "Cable"),
            array('category' =>"Silicon")
            
        );
        DB::table('properties')->insert($properties);
    }
}
