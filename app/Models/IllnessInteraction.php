<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IllnessInteraction
 * 
 * @property int $id
 * @property string $description
 * @property int|null $severity_meter
 * @property int $medicine_id
 * @property int $ilness_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medicine $medicine
 * @property Illness $illness
 *
 * @package App\Models
 */
class IllnessInteraction extends Model
{
	protected $table = 'illness_interactions';

	protected $casts = [
		'severity_meter' => 'int',
		'medicine_id' => 'int',
		'ilness_id' => 'int'
	];

	protected $fillable = [
		'description',
		'severity_meter',
		'medicine_id',
		'ilness_id'
	];

	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

	public function illness()
	{
		return $this->belongsTo(Illness::class, 'ilness_id');
	}
}
