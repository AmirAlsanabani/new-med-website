<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicineSideEffect
 * 
 * @property int $id
 * @property int $medicine_id
 * @property int $side_effect_id
 * @property int|null $frequency
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medicine $medicine
 * @property SideEffect $side_effect
 *
 * @package App\Models
 */
class MedicineSideEffect extends Model
{
	protected $table = 'medicine_side_effects';

	protected $casts = [
		'medicine_id' => 'int',
		'side_effect_id' => 'int',
		'frequency' => 'int'
	];

	protected $fillable = [
		'medicine_id',
		'side_effect_id',
		'frequency'
	];

	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

	public function side_effect()
	{
		return $this->belongsTo(SideEffect::class);
	}
}
