<?php

namespace App\Models;

use App\Models\MUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRoles extends Model
{
    use HasFactory;

    public function user()
	{
		return $this->hasOne(MUsers::class);
	}
}
