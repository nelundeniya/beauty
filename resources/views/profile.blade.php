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
        <h1 class="db-business-name">Hello<br />{{ Auth::user()->name }}</h1>
      </div>
      <div class="medium-2 columns">
        <ul class="db-stat-list">
          <li>#Posts</li>
          <li>#Reviews</li>
          <li>#Stars</li>
        </ul>
      </div>
    </div>
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<div class="row">
					<div class="medium-6 columns profile-image">
						<div class="large-circular" style="	background-image: url('{{ Auth::user()->avatar }}'); background-size:cover;"></div>
					</div>
					<div class="medium-6 columns">
						<h4 class="pr-medium-text">Looking For Work ?</h4>
						<ul class="inline-list">
							<li class="pr-small-text">YES</li>
							<li class="pr-small-text">NO</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    <div class="row" id="dashboard-main">
      <div class="medium-10 medium-centered columns">
			  <div class="row" style="border-bottom: solid 1px #a9a9a9;">
			    <div class="medium-3 columns">
			      
			    </div>
			    <div class="medium-9 columns">

			  	</div>
			 	</div>
			  <div class="row">
			    <div class="medium-3 columns" style="padding:0px;">
			      <ul id="db-left-links">
						  @yield('left-links')
						</ul>
			    </div>
			    <div class="medium-9 columns">
			      <div class="">
			        @yield('content')
			      </div>
			    </div>
			  </div>
			</div>
    </div>
  </div>
</div>

@include('shared.footer')