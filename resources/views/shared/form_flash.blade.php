@if (Session::has('flash_message'))
	<div class="row" style="margin-top:20px;">
		<div class="medium-12 columns">
			<div class="alert-box alert">
			  {{ Session::get('flash_message') }}
			  <a href="#" class="close">⊗</a>
			</div>
		</div>
	</div>
@endif