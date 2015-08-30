<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'review',
		'rating',
	];

	/**
	 * The Review belongs to User association.
	 *
	 * @var collection
	 */
	public function user()
  {
  	return $this->belongsTo('App\User');
  }

	/**
	 * The Review belongs to Service association.
	 *
	 * @var collection
	 */
	public function service()
  {
  	return $this->belongsTo('App\Service');
  }
}
