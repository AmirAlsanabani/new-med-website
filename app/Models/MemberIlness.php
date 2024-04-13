<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberIlness
 * 
 * @property int $id
 * @property int $member_id
 * @property int $ilness_id
 * @property Carbon|null $duration
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Member $member
 * @property Illness $illness
 * @property Collection|MemberSubmittedSideEffect[] $member_submitted_side_effects
 *
 * @package App\Models
 */
class MemberIlness extends Model
{
	protected $table = 'member_ilnesses';

	protected $casts = [
		'member_id' => 'int',
		'ilness_id' => 'int',
		'duration' => 'datetime'
	];

	protected $fillable = [
		'member_id',
		'ilness_id',
		'duration'
	];

	public function member()
	{
		return $this->belongsTo(Member::class);
	}

	public function illness()
	{
		return $this->belongsTo(Illness::class, 'ilness_id');
	}

	public function member_submitted_side_effects()
	{
		return $this->hasMany(MemberSubmittedSideEffect::class, 'member_ilnesses_id');
	}
}
