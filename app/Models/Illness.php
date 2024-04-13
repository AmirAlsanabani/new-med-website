<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Illness
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|IllnessInteraction[] $illness_interactions
 * @property Collection|MemberIlness[] $member_ilnesses
 *
 * @package App\Models
 */
class Illness extends Model
{
	protected $table = 'illnesses';

	protected $fillable = [
		'name'
	];

	public function illness_interactions()
	{
		return $this->hasMany(IllnessInteraction::class, 'ilness_id');
	}

	public function member_ilnesses()
	{
		return $this->hasMany(MemberIlness::class, 'ilness_id');
	}
}
