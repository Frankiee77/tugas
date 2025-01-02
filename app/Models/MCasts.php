<?php

namespace App\Models;

use App\Models\MCastMovies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCasts extends Model
{
    use HasFactory;

    protected $table = 'm_casts';

    public function castMovie()
	{
		return $this->hasMany(MCastMovies::class);
	}
}
