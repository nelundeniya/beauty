@extends('app')

@section('content')
	<div class="row" style="background-color:#ffffff;">
    <div class="medium-12 columns">
      <div id="home-header">
        <img src="/img/logo.png" id="logo" />
        <form id="search-form">
          <input type="text" name="key_word" id="key-word" />
          <input type="submit" id="search-btn" name="search_btn" value="Go" />
        </form>
      </div>
    </div>
  </div>
  <div class="row" style="background-color:#ffffff;">
  	<div class="medium-12 columns">
  		<hr class="search-hr-top">
  	</div>
  	<div class="medium-11 medium-centered columns">
	  	<ul class="medium-block-grid-7" class="search-icons">
	  		<li class="search-links"><img src="/img/ico-deals.png" /></li>
	  		<li class="search-links"><img src="/img/ico-sale.png" /></li>
	  		<li class="search-links"><img src="/img/ico-school.png" /></li>
	  		<li class="search-links"><img src="/img/ico-gallery.png" /></li>
	  		<li class="search-links"><img src="/img/ico-serv.png" /></li>
	  		<li class="search-links"><img src="/img/ico-jobs.png" /></li>
	  		<li class="search-links"><img src="/img/ico-clsf.png" /></li>
	  	</ul>
  	</div>
  	<div class="medium-12 columns">
  		<hr class="search-hr-bottom">
  	</div>
  	<div class="medium-11 medium-centered columns">
	  	<ul class="medium-block-grid-7" class="search-icons">
	  		<li class="text-center"><a href="/search/deals" class="search-text-link">Deals</a></li>
	  		<li class="text-center"><a href="/search/business" class="search-text-link">Business for sale</a></li>
	  		<li class="text-center"><a href="/search/schools" class="search-text-link">Schools & Colleges</a></li>
	  		<li class="text-center"><a href="/search/gallery" class="search-text-link">Gallery</a></li>
	  		<li class="text-center"><a href="/search/services" class="search-text-link">Service Provider</a></li>
	  		<li class="text-center"><a href="/search/jobs" class="search-text-link">Jobs</a></li>
	  		<li class="text-center"><a href="/search/classifieds" class="search-text-link">Classifieds</a></li>
	  	</ul>
  	</div>
  </div>
@endsection