<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SideEffect
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Medicine[] $medicines
 *
 * @package App\Models
 */
class SideEffect extends Model
{
	protected $table = 'side_effects';

	protected $fillable = [
		'name',
		'description'
	];

	public function medicines()
	{
		return $this->belongsToMany(Medicine::class, 'medicine_side_effects')
					->withPivot('id', 'frequency')
					->withTimestamps();
	}
}
