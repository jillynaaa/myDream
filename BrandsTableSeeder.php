<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now(); 
        
        DB::table('Brands')->insert([
            'name'=>'SMC',
            'created_at' => $now,
            'updated_at' => $now,
           ]);
    }
}
