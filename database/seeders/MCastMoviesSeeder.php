<?php

namespace Database\Seeders;

use App\Models\MCastMovies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MCastMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MCastMovies::factory()
            ->count(5)
            ->create();

        // Fetch all movie IDs
        $movieIds = DB::table('m_movies')->pluck('id')->toArray();

        // Fetch all cast IDs
        $castIds = DB::table('m_casts')->pluck('id')->toArray();

        // Seed the castmovie table with random combinations
        foreach ($movieIds as $movieId) {
            foreach ($castIds as $castId) {
                DB::table('castmovie')->insert([
                    'movie_id' => $movieId,
                    'cast_id' => $castId,
                ]);
            }
        }
    }
}
