<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->delete();
        $sizes = array(
            array('length' => 5),
            array('length' => 6),
            array('length' => 10),
            array('length' => 13),
            array('length' => 15),
            array('length' => 17),
            array('length' => 7)
        );
        DB::table('sizes')->insert($sizes);
    }
}
