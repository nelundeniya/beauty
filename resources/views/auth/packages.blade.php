@extends('common')

@section('content')
<div class="row">
	<div class="medium-8 medium-centered columns">
		<div class="row">
			<div class="medium-6 columns">
				<ul class="pricing-table">
				  <li class="title">Service Provider</li>
				  <li class="price">$99.99</li>
				  <li class="description">Register as a Service Provider</li>
				  <li class="bullet-item">Classifieds</li>
				  <li class="bullet-item">Deals</li>
				  <li class="bullet-item">Jobs</li>
				  <li class="cta-button"><a class="button" href="/auth/register?type=service">Register Now</a></li>
				</ul>
			</div>
			<div class="medium-6 columns">
				<ul class="pricing-table">
				  <li class="title">Job Seeker</li>
				  <li class="price">Free</li>
				  <li class="description">Register as a Job Seeker</li>
				  <li class="bullet-item">Apply for Jobs</li>
				  <li class="bullet-item">Review businesses</li>
				  <li class="bullet-item">Find deals</li>
				  <li class="cta-button"><a class="button" href="/auth/register?type=member">Register Now</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection