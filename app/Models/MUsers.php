<?php

namespace App\Models;

use App\Models\MProfiles;
use App\Models\MReviews;
use App\Models\MRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUsers extends Model
{
    use HasFactory;

    protected $table = 'm_users';

    public function profile()
	{
		return $this->hasOne(MProfiles::class);
	}
    public function review()
	{
		return $this->hasMany(MReviews::class);
	}
    public function role()
	{
		return $this->belongsTo(MRoles::class);
	}
}