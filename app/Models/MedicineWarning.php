<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicineWarning
 * 
 * @property int $id
 * @property int $medicine_id
 * @property int $warning_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medicine $medicine
 * @property Warning $warning
 *
 * @package App\Models
 */
class MedicineWarning extends Model
{
	protected $table = 'medicine_warnings';

	protected $casts = [
		'medicine_id' => 'int',
		'warning_id' => 'int'
	];

	protected $fillable = [
		'medicine_id',
		'warning_id'
	];

	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

	public function warning()
	{
		return $this->belongsTo(Warning::class);
	}
}
