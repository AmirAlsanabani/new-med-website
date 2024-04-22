<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicine
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $commercial_name
 * @property string|null $scientific_name
 * @property string|null $description
 * @property string|null $men_dosage
 * @property string|null $women_dosage
 * @property string|null $kids_dosage
 * @property int $category_id
 * @property int $country_id
 * 
 * @property MedicineCategory $medicine_category
 * @property OriginCountry $origin_country
 * @property Collection|IllnessInteraction[] $illness_interactions
 * @property Collection|FoodInteraction[] $food_interactions
 * @property Collection|SideEffect[] $side_effects
 * @property Collection|Warning[] $warnings
 * @property Collection|MedicineInteraction[] $medicine_interactions
 * @property Collection|Member[] $members
 *
 * @package App\Models
 */
class Medicine extends Model
{
	protected $table = 'medicine';

	protected $casts = [
		'category_id' => 'int',
		'country_id' => 'int'
	];

	protected $fillable = [
		'commercial_name',
		'scientific_name',
		'description',
		'men_dosage',
		'women_dosage',
		'kids_dosage',
		'category_id',
		'country_id'
	];

	public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function warning()
    {
        return $this->belongsTo(Warning::class);
    }

	public function medicine_category()
	{
		return $this->belongsTo(MedicineCategory::class, 'category_id');
	}
	
	public function origin_country()
	{
		return $this->belongsTo(OriginCountry::class, 'country_id');
	}

	public function illness_interactions()
	{
		return $this->hasMany(IllnessInteraction::class);
	}

	public function food_interactions()
	{
		return $this->hasMany(FoodInteraction::class);
	}

	public function side_effects()
	{
		return $this->belongsToMany(SideEffect::class, 'medicine_side_effects')
					->withPivot('id', 'frequency')
					->withTimestamps();
	}

	public function warnings()
	{
		return $this->belongsToMany(Warning::class, 'medicine_warnings')
					->withPivot('id')
					->withTimestamps();
	}

	public function medicine_interactions()
	{
		return $this->hasMany(MedicineInteraction::class, 'medicine_id2');
	}
	
	public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'category_id');
    }

	public function members()
	{
		return $this->belongsToMany(Member::class, 'member_medicine')
					->withPivot('id', 'duration')
					->withTimestamps();
	}
}
