<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 06 Dec 2018 06:52:28 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PropertyDropdownOption
 * 
 * @property int $id
 * @property int $property_id
 * @property string $display_text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Property $property
 *
 * @package App\Models
 */
class PropertyDropdownOption extends Eloquent
{
	protected $casts = [
		'property_id' => 'int'
	];

	protected $fillable = [
		'property_id',
		'display_text'
	];

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}
}
