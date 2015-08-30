<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'description',
		'price',
		'discount',
		'saving',
		'email',
		'phone',
	];

	/**
	 * The Deal belongs to Service association.
	 *
	 * @var collection
	 */
	public function service()
  {
  	return $this->belongsTo('App\Service');
  }
  
  /**
	 * The Deal belongs to many Categories association.
	 *
	 * @var collection
	 */
  public function categories()
  {
  	return $this->belongsToMany('App\Category');
  }
}
