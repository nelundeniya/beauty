@include('shared.header')

<div class="row" style="background-color:#ffffff;">
  <div class="medium-12 columns">
    <div id="common-header">
      <img src="/img/logo.png" id="logo-db" />
      <form id="search-form-common">
        <input type="text" name="key_word" id="key-word" />
        <input type="submit" id="search-btn" name="search_btn" value="Go" />
      </form>
    </div>
  </div>
</div>
<div class="row sep-shadow">
	<div class="medium-12 columns">
	
	</div>
</div>
<div class="row" id="dashboard">
  <div class="medium-12 columns">
    <div class="row">
      <div class="medium-10 columns">
        <h1 class="db-business-name">Hello<br /><?php echo $service->service_name; ?></h1>
      </div>
      <div class="medium-2 columns">
        <ul class="db-stat-list">
          <li>#Posts</li>
          <li>#Reviews</li>
          <li>#Listings</li>
          <li>#Stars</li>
        </ul>
      </div>
    </div>
    <div class="row" id="db-user-listings">
      <div class="medium-12 columns">
        <h3 class="db-subhead">User Listings</h3>
        <ul class="medium-block-grid-4">
          <li class="db-user-listing">
            <img src="/img/ico-scissors.jpg" class="left" />
            <h4 class="db-listing-title left">Title</h4>
            <div class="db-listing-img left">Picture</div>
            <span class="db-listing-sh left">Date</span>
            <span class="db-listing-sh right"># times views</span>
          </li>
          <li class="db-user-listing">
            <img src="/img/ico-scissors.jpg" class="left" />
            <h4 class="db-listing-title left">Title</h4>
            <div class="db-listing-img left">Picture</div>
            <span class="db-listing-sh left">Date</span>
            <span class="db-listing-sh right"># times views</span>
          </li>
          <li class="db-user-listing">
            <img src="/img/ico-scissors.jpg" class="left" />
            <h4 class="db-listing-title left">Title</h4>
            <div class="db-listing-img left">Picture</div>
            <span class="db-listing-sh left">Date</span>
            <span class="db-listing-sh right"># times views</span>
          </li>
          <li class="db-user-listing">
            <img src="/img/ico-scissors.jpg" class="left" />
            <h4 class="db-listing-title left">Title</h4>
            <div class="db-listing-img left">Picture</div>
            <span class="db-listing-sh left">Date</span>
            <span class="db-listing-sh right"># times views</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="medium-12 columns">
        <ul class="inline-list db-main-tabs">
          <li style=""><a href="/dashboard/account">Account</a></li>
          <li style="margin-left: -20px;"><a href="/dashboard/listings">Listings</a></li>
          <li style="margin-left: -20px;"><a href="#">Manage Posts</a></li>
        </ul>
      </div>
    </div>
    <div class="row" id="dashboard-main">
      <div class="medium-10 medium-centered columns">
			  <div class="row" style="border-bottom: solid 1px #a9a9a9;">
			    <div class="medium-3 columns">
			      
			    </div>
			    <div class="medium-9 columns">
			      <ul class="tabs" data-tab>
			        @yield('tab-section')
			      </ul>
			  	</div>
			 	</div>
			  <div class="row">
			    <div class="medium-3 columns" style="padding:0px;">
			      <ul id="db-left-links">
						  @yield('left-links')
						</ul>
			    </div>
			    <div class="medium-9 columns">
			      <div class="tabs-content">
			        @yield('tab-content')
			      </div>
			    </div>
			  </div>
			</div>
    </div>
  </div>
</div>

@include('shared.footer')