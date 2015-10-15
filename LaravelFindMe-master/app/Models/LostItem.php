<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LostItem extends Model {

	/**
	 * Table name
	 */
	protected $table = 'lost_items';

	/**
	* Attributes for mass assignment
	*/
	protected $fillable = [
		'item_type_id',
		'location',
		'description',
		'is_found'
	];

	/**
	 * Item type relationship
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function itemType() {
		return $this->belongsTo('App\Models\ItemType');
	}
}