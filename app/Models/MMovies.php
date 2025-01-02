<?php

namespace App\Models;

use App\Models\MGenres;
use App\Models\MCastMovies;
use App\Models\MReviews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMovies extends Model
{
    use HasFactory;

    protected $table = 'm_movies';

    public function genre()
    {
        return $this -> belongsTo(MGenres::class);
    }
    public function castMovie()
	{
		return $this->hasMany(MCastMovies::class);
	}

    public function review()
	{
		return $this->hasMany(MReviews::class);
	}
}
