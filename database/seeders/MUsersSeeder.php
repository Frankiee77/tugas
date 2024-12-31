<?php

namespace Database\Seeders;

use App\Models\MUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MUsers::factory()
            ->count(5)
            ->create();
    }
}
