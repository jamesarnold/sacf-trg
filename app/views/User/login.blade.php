@section("content")

{{ Form::open([
	'route'	=> 'login',
	'class'	=> 'form-signin'
]) }}

	<h2 class="form-signin-heading">Please sign in</h2>

	{{ Form::text( 'email', '', [
		'class'	=> 'form-control',
		'placeholder'	=> 'Email Address',
		'autofocus'	=> true
	]) }}

	{{ Form::password( 'password', [
		'class'	=> 'form-control',
		'placeholder'	=> 'Password',
	]) }}

	{{ Form::submit( 'Sign in', [
		'class'	=> 'btn btn-lg btn-primary btn-block'
	]) }}

	<a href="" class="">Register</a>
	
{{Form::close()}}

@stop