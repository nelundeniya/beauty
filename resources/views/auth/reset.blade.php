@extends('common')

@section('content')

<div class="row">
	<div class="medium-6 medium-centered columns">
		<h3>Reset Password</h3>
		@include('shared.form_errors')
		@include('shared.form_flash')
		{!! Form::open(['url' => '/password/reset']) !!}
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
		  	<input type="hidden" name="token" value="{{ $token }}">
		  	{!! Form::submit('Reset', ['class' => 'db-submit right']) !!}    
		  </div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
