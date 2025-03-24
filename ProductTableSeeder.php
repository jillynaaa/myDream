<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
       $now = now();

       DB::table('products')->insert([
        'name'=>'air cylinders',
        'price' => 200,
        'stock' => 40,
        'created_at' => $now,
        'updated_at' => $now,
       ]);

       DB::table('products')->insert([
        'name'=>'rotary actuators',
        'price' => 340,
        'stock' => 10,
        'created_at' => $now,
        'updated_at' => $now,
       ]);
    }
}
