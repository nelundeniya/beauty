<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beauty Collective</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="row" style="background-color:#ffffff;">
  <div class="medium-12 columns">
    <div id="top-nav">
      <ul class="inline-list right hide-for-small-only">
      	<li class="tn-link @if (Request::is('/')) active @endif"><a href="/">Home</a></li>
	  		@if (Auth::guest())
					<li class="tn-link @if (Request::is('auth/login')) active @endif">
						<a href="{{ url('/auth/login') }}">Login</a>
					</li>
					<li class="tn-link @if (Request::is('auth/register')) active @endif">
						<a href="#" data-dropdown="hover1" data-options="">Register</a>
					</li>
				@else
					@if (Auth::user()->hasRole('business'))
						<li class="tn-link @if (Request::is('dashboard') || Request::is('dashboard/*')) active @endif">
							<a href="{{ url('/dashboard') }}">Dashboard</a>
						</li>
					@endif
					@if (Auth::user()->hasRole('member'))
						<li class="tn-link @if (Request::is('profile') || Request::is('profile/*')) active @endif">
							<a href="{{ url('/profile') }}">Profile</a>
						</li>
					@endif					
					<li class="tn-link"><a href="{{ url('/auth/logout') }}">Logout</a></li>
				@endif
      </ul>
    </div>
  </div>
</div>
<div id="hover1" class="f-dropdown content" data-dropdown-content>
	<div style="width:600px; float:right; background-color: #252525; opacity:0.95; padding:10px;">
		<div class="row">
			<div class="medium-12 columns">
				<h3 class="reg-header">Registration</h3>
				<h4 class="reg-subheader">Please choose an account type:</h4>
			</div>
		</div>
  	<div class="row">
  		<div class="medium-4 columns">
  			<div class="reg-box text-center">
  			<a href="/auth/register?type=individual" class="reg-link">Individual</a>
  			</div>
  		</div>
  		<div class="medium-4 columns">
  			<div class="reg-box text-center">
  			<a href="/auth/register?type=business" class="reg-link">Business</a>
  			</div>
  		</div>
  		<div class="medium-4 columns">
  		<div class="reg-box text-center">
  			<a href="/auth/register?type=distributor" class="reg-link">Distributor</a>
  		</div>
  		</div>
  	</div>
  </div>
</div>