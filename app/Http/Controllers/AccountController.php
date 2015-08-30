<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getReviews()
    {
    	$data['service'] = \Auth::user()->services->first();
    	return view('dashboard.account.reviews.review-list', $data);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getSettings()
    {
    	$data['service'] = \Auth::user()->services->first();
    	return view('dashboard.account.settings.account-details', $data);
    }
    
    public function update_account_detail(Requests\UpdateAccountDetail $request)
    {
    	$input = \Request::all();
    	$user = \Auth::user();
    	$user->email = $input['email'];
    	$user->save();
    	\Session::flash('flash_message', 'Account Details Updated Successfully!');
    	return redirect('dashboard/account/settings');
    }
    
    public function getProfile()
    {
    		$data['reviews'] = \Auth::user()->reviews->all();
    		return view('profile.reviews.review-list', $data);
    }
}
