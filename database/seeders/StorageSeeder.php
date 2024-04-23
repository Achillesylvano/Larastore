<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('storages')->delete();
        $storages = array(
            array('capacity' => "4 Go"),
            array('capacity' => "8 Go"),
            array('capacity' => "16 Go"),
            array('capacity' => "32 Go"),
            array('capacity' => "64 Go"),
            array('capacity' => "128 Go"),
            array('capacity' => "160 Go"),
            array('capacity' => "256 Go"),
            array('capacity' => "320 Go"),
            array('capacity' => "500 Go"),
            array('capacity' => "1 To"),
            array('capacity' => "2 To"),
        );
        DB::table('storages')->insert($storages);
    }
}
