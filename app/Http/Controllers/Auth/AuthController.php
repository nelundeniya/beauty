<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Registration & Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users, as well as the
  | authentication of existing users. By default, this controller uses
  | a simple trait to add these behaviors. Why don't you explore it?
  |
  */
	protected $redirectPath = '/';
	
  use AuthenticatesAndRegistersUsers, ThrottlesLogins;

  /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest', ['except' => 'getLogout']);
      
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
		$input = \Request::all();
		if(isset($input['type']) && ($input['type'] == 'business' || $input['type'] == 'distributor')){
			return Validator::make($data, [
        'name' => 'required|max:255',
        'service_name' => 'required|unique:services',
        'phone' => 'required',
        'location' => 'required',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
    	]);
		}else{
			return Validator::make($data, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
    	]);
		}
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  protected function create(array $data)
  {
    return User::create([
      'name' 			=> $data['name'],
      'email' 		=> $data['email'],
      'password' 	=> bcrypt($data['password']),
      'avatar'		=> '/uploads/profiles/default.jpg',
    ]);
  }
    
  protected function updateRegistration($user)
  {
		$input = \Request::all();
		if(isset($input['type']) && ($input['type'] == 'business' || $input['type'] == 'distributor')){ 	
  		$user->attachRole(2);
  		$location = $this->getLocation($input['location']);
  		$user->services()->create([
  			'type'					=> $input['type'],
  			'service_name'	=> $input['service_name'],
  			'phone'					=> $input['phone'],
  			'suburb'				=> $location['suburb'],
  			'postcode'			=> $location['postcode'],
  			'state'					=> $location['state'],
  			'city_id'				=> $input['city_id'],
				'status'				=> 'pending',
  			'slug'					=> $this->toSlug($input['service_name']),
  			'logo'					=> '/uploads/logos/default.png',
  		]);
  		return '/dashboard';
  	}else{
  		$user->attachRole(3);
  		return '/profile';
  	}
  }
  
  protected function toSlug($string)
  {
  	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
  }
  
  protected function getLocation($string)
  {
		$address = explode(",", $string);
		$location['suburb'] = $address[0];
		$states = explode(" ", trim($address[1]));
		$location['postcode'] = $states[1];
		$location['state'] = $states[0];
		return $location;  
  }
}
