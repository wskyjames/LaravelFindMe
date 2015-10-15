<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model {

	/**
	 * Table name
	 */
	protected $table = 'item_categories';

	/**
	 * Attributes for mass assignment
	 */
	protected $fillable = ['name'];

	/**
	 * Item Type relationships
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function types() {
		return $this->hasMany('App\Models\ItemTypes');
	}

}