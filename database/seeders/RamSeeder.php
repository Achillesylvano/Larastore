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
            array('capacity' => 2),
            array('capacity' => 4),
            array('capacity' => 8),
            array('capacity' => 16),
            array('capacity' => 1),
        );
        DB::table('rams')->insert($rams);

    }
}
