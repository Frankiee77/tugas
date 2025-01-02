<?php

namespace App\Models;

use App\Models\MMovies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MGenres extends Model
{
    use HasFactory;

    protected $table = 'm_genres';

    public function movie()
	{
		return $this->hasMany(MMovies::class);
	}
}
