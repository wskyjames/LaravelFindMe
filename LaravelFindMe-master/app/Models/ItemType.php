<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model {

	/**
	 * Table name
	 */
	protected $table = 'item_types';

	/**
	* Attributes for mass assignment
	*/
	protected $fillable = [
		'item_category_id',
		'description',
		'make',
		'model'
	];

	/**
	 * Item category relationship
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function category() {
		return $this->belongsTo('App\Models\ItemCategory', 'item_category_id');
	}

	/**
	 * Lost item relationship
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function lostItem() {
		return $this->hasMany('App\Models\LostItem');
	}

}