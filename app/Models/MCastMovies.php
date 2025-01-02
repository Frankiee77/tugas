<?php

namespace App\Models;

use App\Models\MCasts;
use App\Models\MMovies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCastMovies extends Model
{
    use HasFactory;
    
    protected $table = 'm_cast_movies';

    public function cast()
	{
		return $this->belongsTo(MMovies::class);
	}
    public function movie()
	{
		return $this->belongsTo(MCasts::class);
	}
}
