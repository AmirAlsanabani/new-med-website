<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OriginCountry
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Medicine[] $medicines
 *
 * @package App\Models
 */
class OriginCountry extends Model
{
	protected $table = 'origin_countries';

	protected $fillable = [
		'name'
	];

	public function medicines()
	{
		return $this->hasMany(Medicine::class, 'country_id');
	}
}
