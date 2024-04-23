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
            array('length' => "3,5\""),
            array('length' => "4\""),
            array('length' => "5\""),
            array('length' => "6\""),
            array('length' => "7\""),
            array('length' => "8\""),
            array('length' => "9\""),
            array('length' => "10\""),
            array('length' => "11\""),
            array('length' => "12\""),
            array('length' => "13\""),
            array('length' => "14\""),
            array('length' => "15\""),
            array('length' => "16\""),
            array('length' => "17\""),
        );
        DB::table('sizes')->insert($sizes);
    }
}
