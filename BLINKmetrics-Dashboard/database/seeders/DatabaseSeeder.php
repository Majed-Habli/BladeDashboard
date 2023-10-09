<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('char_types')->insert([
            'id' => 1,
            'name' => "bar",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        
        DB::table('char_types')->insert([
            'id' => 2,
            'name' => "pie",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        
        DB::table('char_types')->insert([
            'id' => 3,
            'name' => "line",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        
        DB::table('char_types')->insert([
            'id' => 4,
            'name' => "polarArea",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('char_colors')->insert([
            'id' => 1,
            'color' => "F06A6A",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('char_colors')->insert([
            'id' => 2,
            'color' => "F8DF72",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('char_colors')->insert([
            'id' => 3,
            'color' => "B3DF97",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('char_colors')->insert([
            'id' => 4,
            'color' => "4ECBC4",
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
