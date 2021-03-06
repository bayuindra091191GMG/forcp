<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 08:39:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Address
 * 
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property int $primary
 * @property int $province
 * @property int $city
 * @property int $disctrict
 * @property string $postal_code
 * @property string $recipient_name
 * @property string $recipient_phone
 * @property string $name
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Address extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int',
		'primary' => 'int',
		'province' => 'int',
		'city' => 'int',
		'disctrict' => 'int'
	];

	protected $fillable = [
		'user_id',
		'description',
		'primary',
		'province',
		'city',
		'disctrict',
		'postal_code',
		'recipient_name',
		'recipient_phone',
		'name'
	];

	public function city()
	{
		return $this->belongsTo(\App\Models\City::class, 'city');
	}

	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class, 'province');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
