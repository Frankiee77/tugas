<?php

namespace Database\Seeders;

use App\Models\MReviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MReviews::factory()
             ->count(5)
             ->create();
             
    }
}
