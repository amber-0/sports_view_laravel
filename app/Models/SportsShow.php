<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SportsShow extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'select_team',
		'japan_score',
		'mexico_score',
		'cheer',
		'yen',
		'comment',
	];
}

