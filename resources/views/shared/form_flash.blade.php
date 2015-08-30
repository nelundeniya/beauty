@if (Session::has('flash_message'))
	<div class="alert-box alert">
	  {{ Session::get('flash_message') }}
	  <a href="#" class="close">⊗</a>
	</div>
@endif