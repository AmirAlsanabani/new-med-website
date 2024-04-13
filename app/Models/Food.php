<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|FoodInteraction[] $food_interactions
 *
 * @package App\Models
 */
class Food extends Model
{
	protected $table = 'foods';

	protected $fillable = [
		'name'
	];

	public function food_interactions()
	{
		return $this->hasMany(FoodInteraction::class);
	}
}
