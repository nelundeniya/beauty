<div class="row">
  <div class="medium-12 columns">
    <span class="left db-review-stats">{{ count($service->reviews) }} Reviews</span>
    <span class="left db-review-stats"><img src="/img/{{ getRatingImage($service->rating) }}" /></span>
  </div>
</div>
@if(count($service->reviews) == 0)

@else

@foreach($service->reviews as $review)
	<div class="row">
		<div class="medium-12 columns">
			<div class="review-block">
			<div class="row">
				<div class="medium-3 columns text-center">
					<div class="small-circular" style="background-image: url('{{ $review->user->avatar }}'); background-size: cover; margin: 0 auto;"></div>
					<ul class="review-user">					
						<li><a href="#">{{ $review->user->name }}</a></li>
						<li>{{ count($review->user->reviews) }} Reviews</li>
					</ul>
				</div>
				<div class="medium-9 columns">
					<h4 class="">{{ Carbon::createFromTimeStamp(strtotime($review->created_at))->diffForHumans() }}</h4>
					<p class="review-text">{{ $review->review }}</p>				
				</div>
			</div>
			</div>
		</div>
	</div>
@endforeach

@endif