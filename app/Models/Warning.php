<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Warning
 * 
 * @property int $id
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Medicine[] $medicines
 *
 * @package App\Models
 */
class Warning extends Model
{
	protected $table = 'warnings';

	protected $fillable = [
		'description'
	];

	public function medicines()
	{
		return $this->belongsToMany(Medicine::class, 'medicine_warnings')
					->withPivot('id')
					->withTimestamps();
	}
}
