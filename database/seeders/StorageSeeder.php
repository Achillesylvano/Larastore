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
            array('capacity' => 4),
            array('capacity' => 8),
            array('capacity' => 16),
            array('capacity' => 32),
            array('capacity' => 64),
            array('capacity' => 128),
            array('capacity' => 160),
            array('capacity' => 320),
            array('capacity' => 500),
            array('capacity' => 1000)
        );
        DB::table('storages')->insert($storages);
    }
}
