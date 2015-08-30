<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
  use Authenticatable, CanResetPassword, EntrustUserTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password', 'avatar'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];
    
  /**
	 * The User has many Services association.
	 *
	 * @var collection
	 */
	public function services()
  {
  	return $this->hasMany('App\Service');
  }
  
  /**
	 * The User has many Reviews association.
	 *
	 * @var collection
	 */
	public function reviews()
  {
  	return $this->hasMany('App\Review');
  }
  
  public function findByUserNameOrCreate($userData, $provider)
  {
  	$user = User::where('provider_id', '=', $userData->id)->first();
    if(!$user) {
    	$user = User::create([
        'name' 		=> $userData->name,
        'email' 	=> $userData->email,
        'avatar'	=> '/uploads/profiles/default.jpg',
      ]);
      $user->attachRole(3);
    }
    $this->checkIfUserNeedsUpdating($userData, $user, $provider);
    return $user;
	}

  public function checkIfUserNeedsUpdating($userData, $user, $provider)
  {
		$socialData = [
    	'avatar' => $userData->avatar,
      'email' => $userData->email,
      'name' => $userData->name,
    ];
    $dbData = [
    	'avatar' => $user->avatar,
      'email' => $user->email,
      'name' => $user->name,
    ];
    if(!empty(array_diff($socialData, $dbData))) {
      $user->email = $userData->email;
      $user->name = $userData->name;
      $user->provider = $provider;
      $user->provider_id = $userData->id;
      $user->avatar = $userData->avatar;
      $user->save();
    }
  }
}
