<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberMedicine
 * 
 * @property int $id
 * @property int $member_id
 * @property int $medicine_id
 * @property Carbon|null $duration
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Member $member
 * @property Medicine $medicine
 * @property Collection|MemberSubmittedSideEffect[] $member_submitted_side_effects
 *
 * @package App\Models
 */
class MemberMedicine extends Model
{
	protected $table = 'member_medicine';

	protected $casts = [
		'member_id' => 'int',
		'medicine_id' => 'int',
		'duration' => 'datetime'
	];

	protected $fillable = [
		'member_id',
		'medicine_id',
		'duration'
	];

	public function member()
	{
		return $this->belongsTo(Member::class);
	}

	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

	public function member_submitted_side_effects()
	{
		return $this->hasMany(MemberSubmittedSideEffect::class);
	}
}
