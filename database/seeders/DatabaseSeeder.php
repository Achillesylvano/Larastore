<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use App\Models\Accessory;
use Database\Seeders\RamSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\StorageSeeder;
use Database\Seeders\PropertySeeder;
use Database\Seeders\ProcessorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProcessorSeeder::class,
            RamSeeder::class,
            SizeSeeder::class,
            StorageSeeder::class,
            PropertySeeder::class
        ]);
        \App\Models\User::factory(10)->hasProducts(5)->hasAccessories(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Achille',
            'email' => 'achille@gmail.com',
        ]);
    }
}
