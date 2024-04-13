<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberSubmittedSideEffect
 * 
 * @property int $id
 * @property int $member_id
 * @property int $member_medicine_id
 * @property int $member_ilnesses_id
 * @property Carbon|null $duration
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Member $member
 * @property MemberMedicine $member_medicine
 * @property MemberIlness $member_ilness
 *
 * @package App\Models
 */
class MemberSubmittedSideEffect extends Model
{
	protected $table = 'member_submitted_side_effects';

	protected $casts = [
		'member_id' => 'int',
		'member_medicine_id' => 'int',
		'member_ilnesses_id' => 'int',
		'duration' => 'datetime'
	];

	protected $fillable = [
		'member_id',
		'member_medicine_id',
		'member_ilnesses_id',
		'duration',
		'description'
	];

	public function member()
	{
		return $this->belongsTo(Member::class);
	}

	public function member_medicine()
	{
		return $this->belongsTo(MemberMedicine::class);
	}

	public function member_ilness()
	{
		return $this->belongsTo(MemberIlness::class, 'member_ilnesses_id');
	}
}
