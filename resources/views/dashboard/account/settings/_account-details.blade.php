{!! Form::open(['url' => '/dashboard/account/update-account-detail']) !!}
<div class="row">
  <div class="medium-12 columns">
  	{!! Form::label('name', 'Name', ['class' => 'label-inline']) !!}
  	{!! Form::text('name', \Auth::user()->name, ['class' => 'field-inline']) !!}  
  </div>
  <div class="medium-12 columns">
    {!! Form::label('email', 'Email', ['class' => 'label-inline']) !!}
  	{!! Form::text('email', \Auth::user()->email, ['class' => 'field-inline']) !!}    
  </div>
  <div class="medium-12 columns">
    {!! Form::label('password', 'Current Password', ['class' => 'label-inline']) !!}
  	{!! Form::password('password', ['class' => 'field-inline']) !!}  
  </div>
  <div class="medium-12 columns">
    {!! Form::label('new_password', 'New Password', ['class' => 'label-inline']) !!}
  	{!! Form::password('new_password', ['class' => 'field-inline']) !!}  
  </div>  
  <div class="medium-12 columns">
    {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'label-inline']) !!}
  	{!! Form::password('confirm_password', ['class' => 'field-inline']) !!}  
  </div>
</div>
<div class="row">
  <div class="medium-12 columns">
  	{!! Form::submit('Update', ['class' => 'db-submit right']) !!}    
  </div>
</div>
{!! Form::close() !!}