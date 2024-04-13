<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property bool $gender
 * @property int|null $phone_nubmer
 * @property int $age
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MemberIlness[] $member_ilnesses
 * @property Collection|Medicine[] $medicines
 * @property Collection|MemberSubmittedSideEffect[] $member_submitted_side_effects
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'members';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'gender' => 'bool',
		'phone_nubmer' => 'int',
		'age' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'gender',
		'phone_nubmer',
		'age'
	];

	public function member_ilnesses()
	{
		return $this->hasMany(MemberIlness::class);
	}

	public function medicines()
	{
		return $this->belongsToMany(Medicine::class, 'member_medicine')
					->withPivot('id', 'duration')
					->withTimestamps();
	}

	public function member_submitted_side_effects()
	{
		return $this->hasMany(MemberSubmittedSideEffect::class);
	}
}
