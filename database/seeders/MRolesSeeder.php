<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_roles')->insert([
            [
                'name' => 'Admin',
                'created_at' => now(),

            ],
            [
                'name' => 'User',
                'created_at' => now(),
            ]
        ]);
    }
}
