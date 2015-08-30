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

@yield('content')

@include('shared.footer')