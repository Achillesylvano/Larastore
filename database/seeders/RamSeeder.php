<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rams')->delete();
        $rams = array(
            array('capacity' => "1 Go"),
            array('capacity' => "2 Go"),
            array('capacity' => "4 Go"),
            array('capacity' => "8 Go"),
            array('capacity' => "16 Go"),
        );
        DB::table('rams')->insert($rams);

    }
}
