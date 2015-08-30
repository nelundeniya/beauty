@if($errors->any())
	<div class="alert-box warning">
    @foreach ($errors->all() as $error)
	  	{{ $error }}<br>
	  @endforeach
  	<a href="#" class="close">⊗</a>
	</div>
@endif