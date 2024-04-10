<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('processors')->delete();
        $processors = array(
            array('name' => "Intel core2 Duo"),
            array('name' => "Intel core i3"),
            array('name' => "Intel core i5"),
            array('name' => "Intel core i7"),
            array('name' => "AMD"),
            array('name' => "octa-core")
        );
        DB::table('processors')->insert($processors);
    }
}
