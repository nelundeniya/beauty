@extends('profile')

@section('left-links')
	@include('profile.left-links')
@endsection

@section('content')

@if(count($jobs) == 0)
	<div class="row">
		<div class="medium-12 columns">
			<div class="db-message text-center">No Jobs Available</div>
		</div>
	</div>
@else

	@foreach($jobs as $job)
		<div class="row">
			<div class="medium-12 columns">
				<div class="review-block">
				
				</div>
			</div>
		</div>
	@endforeach
@endif
@endsection