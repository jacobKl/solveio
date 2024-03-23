<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cubes')->insert(
            [
                [
                    'id' => 1,
                    'cube_type' => '3x3'
                ],
                [
                    'id' => 2,
                    'cube_type' => '2x2'
                ],
                [
                    'id' => 3,
                    'cube_type' => '4x4'
                ]
            ]
        );
    }
}
