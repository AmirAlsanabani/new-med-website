<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicineCategory
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
class MedicineCategory extends Model
{
	protected $table = 'medicine_categories';

	protected $fillable = [
		'name',
		'description'
	];

	public function medicines()
	{
		return $this->hasMany(Medicine::class, 'category_id');
	}
	
}
