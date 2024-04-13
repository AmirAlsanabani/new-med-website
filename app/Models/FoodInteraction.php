<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FoodInteraction
 * 
 * @property int $id
 * @property string $description
 * @property int|null $severity_meter
 * @property int $medicine_id
 * @property int $food_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medicine $medicine
 * @property Food $food
 *
 * @package App\Models
 */
class FoodInteraction extends Model
{
	protected $table = 'food_interactions';

	protected $casts = [
		'severity_meter' => 'int',
		'medicine_id' => 'int',
		'food_id' => 'int'
	];

	protected $fillable = [
		'description',
		'severity_meter',
		'medicine_id',
		'food_id'
	];

	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

	public function food()
	{
		return $this->belongsTo(Food::class);
	}


}
