@extends('common')

@section('content')
<div class="row">
	<div class="medium-6 medium-centered columns">
		<h3 class="reg-title">Login</h3>
		@include('shared.form_errors')
		@include('shared.form_flash')
		{!! Form::open(['url' => '/auth/login']) !!}
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
		  	<span class="right db-small-font">{!! Form::checkbox('remember') !!} Remember Me</span>
		  </div>
		</div>
		<div class="row">
			<div class="medium-6 columns" style="padding-top:20px;">
				<a class="db-small-font" href="{{ url('/password/email') }}">Forgot Your Password?</a>
			</div>
		  <div class="medium-6 columns">
		  	{!! Form::submit('Login', ['class' => 'db-submit right']) !!}    
		  </div>
		</div>
		{!! Form::close() !!}
		<div class="row">
			<div class="medium-6 columns">
				<a href="/login/facebook"><span class="reg-facebook">Login with Facebook</span></a>
			</div>
			<div class="medium-6 columns">
				<a href="/login/google"><span class="reg-google">Login with Google</span></a>
			</div>
		</div>
	</div>
</div>

@endsection
