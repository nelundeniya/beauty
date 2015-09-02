<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
	protected $service;
	protected $owner;
	protected $reviews;
	
	public function __construct()
	{
		$this->middleware('auth');
		$this->data = array(
			'owner'		=> \Auth::user(),
			'service'	=> \Auth::user()->services->first(),
			'reviews'	=> \Auth::user()->services->first()->reviews->all(),
		);
	}
	
	public function getReviews()
  {
  	return view('dashboard.account.reviews.review-list', $this->data);
  }
  
  public function getSettings()
  {
  	return view('dashboard.account.settings.account-details', $this->data);
  }

	public function getBusinessInfo()
  {
  	return view('dashboard.account.business-info.basic-info', $this->data);
  }
  
  public function getJobSeekers()
  {
  	return view('dashboard.account.job-seekers.job-seeker-list', $this->data);
  }
  
  public function postReviewRequests()
  {
  	$input = \Request::all();
  	$n = 0;
  	$user = array(
			'owner'					=> $this->data['owner']->name,
			'business'			=> $this->data['service']->service_name,
			'business_url'	=> url('/business/'.$this->data['service']->slug),
		);
  	foreach($input['name'] as $name)
  	{
			if(!empty($name) && !empty($input['email'][$n]))
			{
				$user['name']	= $name;
				$user['email']	= $input['email'][$n];
				Mail::send('emails.request_review', ['user' => $user], function ($m) use ($user) 
				{
          $m->to($user['email'], $user['name'])->subject('Review my business');
      	});									
			}
			$n++;    	
  	}
  	\Session::flash('flash_message', 'Emails Sent Successfully!');
  	return redirect('dashboard/account/reviews');
  }
  
  public function postAccountDetail(Requests\UpdateAccountDetail $request)
  {
  	$input = \Request::all();
  	$user = \Auth::user();
  	$user->email = $input['email'];
  	$user->save();
  	\Session::flash('flash_message', 'Account Details Updated Successfully!');
  	return redirect('dashboard/account/settings');
  }
}
