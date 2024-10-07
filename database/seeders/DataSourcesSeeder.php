<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_sources')->insert([[
            'json_column' => 'shipment_id',
            'user_column' => 'shipment_id',
        ], [
            'json_column' => 'origin',
            'user_column' => 'origin',
        ], [
            'json_column' => 'destination',
            'user_column' => 'destination',
        ], [
            'json_column' => 'weight',
            'user_column' => 'weight',
        ], [
            'json_column' => 'status',
            'user_column' => 'status',
        ]
        ]);
    }
}
