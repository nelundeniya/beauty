<div class="row">
  <div class="medium-12 columns">
    <p class="db-text">Enter your customers' emails and we will email them a request to review your business.
      <br />
      <span class="db-text-small">*IMPORTANT: We do not store these details or use them for marketing purposes.</span>
    </p>
  </div>
</div>
{!! Form::open(['url' => '/dashboard/account/request_reviews']) !!}
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Customer 1</label>
    	{!! Form::text('name[]', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label"> </label>
    		{!! Form::text('email[]', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Customer 2</label>
    	{!! Form::text('name[]', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label"> </label>
    		{!! Form::text('email[]', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Customer 3</label>
    	{!! Form::text('name[]', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label"> </label>
    		{!! Form::text('email[]', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Customer 4</label>
    	{!! Form::text('name[]', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label"> </label>
    		{!! Form::text('email[]', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Customer 5</label>
    	{!! Form::text('name[]', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label"> </label>
    		{!! Form::text('email[]', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns"><button class="db-submit right" type="submit">Submit</button></div>
  </div>
{!! Form::close() !!}