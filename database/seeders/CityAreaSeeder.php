<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityAreaSeeder extends Seeder
{
    public function run(): void
    {
        // Seed cities
        $delhiId = DB::table('cities')->insertGetId([
            'state_id' => 1,
            'country_id' => 1,
            'city_name' => 'Delhi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $puneId = DB::table('cities')->insertGetId([
            'state_id' => 1,
            'country_id' => 1,
            'city_name' => 'Pune',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed areas
        DB::table('areas')->insert([
            [
                'city_id' => $delhiId,
                'state_id' => 1,
                'country_id' => 1,
                'area_name' => 'Connaught Place',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => $puneId,
                'state_id' => 1,
                'country_id' => 1,
                'area_name' => 'Koregaon Park',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
} 