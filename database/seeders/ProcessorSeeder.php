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
            array('name' => "Qualcomm Snapdragon 8 Gen 4"),
            array('name' => "MediaTek Dimensity 9300"),
            array('name' => "Qualcomm Snapdragon 8 Gen 3"),
            array('name' => "Qualcomm Snapdragon 8+ Gen 2"),
            array('name' => "Qualcomm Snapdragon 8s Gen 3"),
            array('name' => "Apple A17 Pro"),
            array('name' => "Qualcomm Snapdragon 7+ Gen 3"),
            array('name' => "MediaTek Dimensity 8300"),
            array('name' => "MediaTek Dimensity 9200+"),
            array('name' => "Qualcomm Snapdragon 8 Gen 2"),
            array('name' => "MediaTek Dimensity 9200"),
            array('name' => "Google Tensor G3"),
            array('name' => "Apple A16 Bionic"),
            array('name' => "Qualcomm Snapdragon 8+ Gen 1"),
            array('name' => "Samsung Exynos 2200"),         
            array('name' => "Google Tensor"),
            array('name' => "HiSilicon Kirin 9000s"),
            array('name' => "Samsung Exynos 1480"),
            array('name' => "Huawei HiSilicon Kirin 620"),
            array('name' => "Huawei HiSilicon Kirin 920"),
            array('name' => "AMD Ryzen 9 7945HX"),
            array('name' => "AMD Ryzen 9 7940HX"),
            array('name' => "AMD Ryzen 9 7945HX3D"),
            array('name' => "Intel Core i9-14900HX"),
            array('name' => "Intel Core i9-13980HX"),
            array('name' => "Intel Core i7-14700HX"),
            array('name' => "AMD Ryzen 9 7845HX"),
            array('name' => "Apple M3 Max (16-core CPU)"),
            array('name' => "Apple M1"),
            array('name' => "AMD Ryzen 5 7520U"),
            array('name' => "Intel Core i3-1110G4"),
            array('name' => "Intel Core i5-13600HX"),
        );
        DB::table('processors')->insert($processors);
    }
}
