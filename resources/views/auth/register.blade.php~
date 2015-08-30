<?php $input = \Request::all(); ?>
@extends('common')

@section('content')

<div class="row">
	<div class="medium-6 medium-centered columns">
		<h3 class="reg-title">Register</h3>
		@include('shared.form_errors')
		@include('shared.form_flash')
		{!! Form::open(['url' => '/auth/register']) !!}
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('name', 'Name', ['class' => 'label-inline']) !!}
		  	{!! Form::text('name', null, ['class' => 'field-inline']) !!}    
		  </div>
		</div>
		@if (isset($input['type']) && ($input['type'] == 'business' || $input['type'] == 'distributor'))
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('service_name', 'Business Name', ['class' => 'label-inline']) !!}
		  	{!! Form::text('service_name', null, ['class' => 'field-inline']) !!}    
		  </div>
		</div>
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('phone', 'Phone', ['class' => 'label-inline']) !!}
		  	{!! Form::text('phone', null, ['class' => 'field-inline']) !!}    
		  </div>
		</div>
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('location', 'Location', ['class' => 'label-inline']) !!}
		  	{!! Form::text('location', null, ['class' => 'field-inline']) !!}    
		  </div>
		</div>
		@endif
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('email', 'Email', ['class' => 'label-inline']) !!}
		  	{!! Form::text('email', null, ['class' => 'field-inline']) !!}    
		  </div>
		</div>
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('password', 'Password', ['class' => 'label-inline']) !!}
		  	{!! Form::password('password', ['class' => 'field-inline']) !!}  
		  </div>
		</div>
		<div class="row">
		  <div class="medium-12 columns">
		    {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'label-inline']) !!}
		  	{!! Form::password('password_confirmation', ['class' => 'field-inline']) !!}  
		  </div>
		</div>
		<div class="row">
		  <div class="medium-12 columns">
		  	@if (isset($input['type']))
		  	{!! Form::hidden('type', $input['type']) !!}
		  	@endif
		  	{!! Form::hidden('city_id', 0, ['id' => 'city_id']) !!}
		  	{!! Form::submit('Register', ['class' => 'db-submit right']) !!}    
		  </div>
		</div>
		{!! Form::close() !!}
		@if (!isset($input['type']) || $input['type'] == 'individual')
		<div class="row">
			<div class="medium-6 columns">
				<a href="/login/facebook"><span class="reg-facebook">Register with Facebook</span></a>
			</div>
			<div class="medium-6 columns">
				<a href="/login/google"><span class="reg-google">Register with Google</span></a>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection
