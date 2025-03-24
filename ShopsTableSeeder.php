<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $now = now();
         
        DB::table('Shops')->insert([
            'name'=>'stuff',
            'price' => 350,
            'created_at' => $now,
            'updated_at' => $now,
           ]);
    }
}
