<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
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
		'email',
		'phone',
	];

	/**
	 * The Classified belongs to Service association.
	 *
	 * @var collection
	 */
	public function service()
  {
  	return $this->belongsTo('App\Service');
  }
  
  /**
	 * The Classified belongs to many Categories association.
	 *
	 * @var collection
	 */
  public function categories()
  {
  	return $this->belongsToMany('App\Category');
  }
}
