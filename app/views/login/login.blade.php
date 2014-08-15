@extends('layout.default')

@section('content')
<div class="form-inline" >
  	<div class="form-group">
		{{ Form::open(array('url' => 'login')) }}
			<h1>Login</h1>
			
			
					<p>
						{{ $errors->first('email') }}
						{{ $errors->first('password') }}
					</p>

					
						{{ Form::label('email', 'Email Address') }}
						{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
					

					
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', array('class' => 'form-control')) }}
					

					{{ Form::submit('Submit!', array('class'=>'btn btn-success')) }}
		{{ Form::close() }}
	</div>
</div>		
		
@stop