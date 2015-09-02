{!! Form::open(['url' => '/dashboard/account/submit_reviews']) !!}
  <div class="row">
    <div class="medium-6 columns">
    	<label for="customer_name" class="db-label">Name</label>
    	{!! Form::text('name', null, ['class' => 'db-text-input', 'placeholder' => 'Name']) !!} 
    </div>
    <div class="medium-6 columns">
    	<label class="db-label">Email</label>
    		{!! Form::text('email', null, ['class' => 'db-text-input', 'placeholder' => 'Email']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns">
    	<label for="customer_name" class="db-label">Review</label>
    	{!! Form::textarea('review', null, ['class' => 'db-text-input', 'placeholder' => 'Your Review']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns">
    	<label class="db-label">Rating</label>
    		{!! Form::select('email[]', ['0.5','1.0','1.5'], ['class' => 'db-text-input']) !!} 
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns"><button class="db-submit right" type="submit">Submit</button></div>
  </div>
{!! Form::close() !!}