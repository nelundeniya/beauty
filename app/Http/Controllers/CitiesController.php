<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
  public function getTowns()
  {
  	$input = \Request::all();
  	$search = '%'.$input['term'].'%';
  	$cities = City::where('location', 'like', $search)
               ->orderBy('location', 'asc')
               ->take(10)
               ->get()
               ->lists('full_location', 'id');
    foreach ($cities as $key=>$val){
    	$new_row['label']=htmlentities(stripslashes($val));
      $new_row['value']=htmlentities(stripslashes($val));
      $new_row['id'] = $key;
      $row_set[] = $new_row; //build an array
    }
		return $row_set;  
  }
}
