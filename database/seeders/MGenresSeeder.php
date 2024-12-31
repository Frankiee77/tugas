<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_genres')->insert([
            [
                'name' => 'Action',
                'created_at' => now(),

            ],
            [
                'name' => 'Crime',
                'created_at' => now(),
            ],
            [
                'name' => 'Drama',
                'created_at' => now(),
            ],
            [
                'name' => 'Fantasy',
                'created_at' => now(),
            ],
            [
                'name' => 'Comedy',
                'created_at' => now(),
            ],
        ]);
    }
}
