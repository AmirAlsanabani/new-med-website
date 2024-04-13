<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicineInteraction
 * 
 * @property int $id
 * @property string $description
 * @property int|null $severity_meter
 * @property int $medicine_id1
 * @property int $medicine_id2
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medicine $medicine
 *
 * @package App\Models
 */
class MedicineInteraction extends Model
{
	protected $table = 'medicine_interactions';

	protected $casts = [
		'severity_meter' => 'int',
		'medicine_id1' => 'int',
		'medicine_id2' => 'int'
	];

	protected $fillable = [
		'description',
		'severity_meter',
		'medicine_id1',
		'medicine_id2'
	];

	public function medicine()
	{
		return $this->belongsTo(Medicine::class, 'medicine_id2');
	}
}
