<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlakhotahJoinRequest extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'name',
		'personal_id',
		'email',
		'mobile',
		'gender',
		'birth',
		'blood_type',
		'specialization',
		'diseases',
		'city',
		'uniform_size',
		'education',
		'languages',
		'personal_id_image',
		'cv_file',
	];

	protected function casts(): array
	{
		return [
			'birth' => 'date',
			'languages' => 'array',
		];
	}
}
