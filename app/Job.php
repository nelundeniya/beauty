<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'description',
		'type',
		'visa',
		'notify',
		'email',
		'phone',
	];

	/**
	 * The Job belongs to Service association.
	 *
	 * @var collection
	 */
	public function service()
  {
  	return $this->belongsTo('App\Service');
  }
  
  /**
	 * The Job belongs to many Categories association.
	 *
	 * @var collection
	 */
  public function categories()
  {
  	return $this->belongsToMany('App\Category');
  }
  
  public function users()
  {
  	return $this->belongsToMany('App\User');
  }
}
