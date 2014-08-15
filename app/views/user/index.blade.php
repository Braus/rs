@extends('layout.default')

@section('title')
	User
@stop

@section('content')
	<h1> Profile </h1>
	@foreach($user as $u)
		<div class="panel panel-success">
			<div class="panel-heading">
				<p><strong>Name : </strong> {{ $u->firstName}}  {{ $u->lastName}} </p>
				<p><strong>Email : </strong>{{ $u->email }}</p>
				<p><strong>Mobile : </strong>{{ $u->mobile }}</p>
			</div>
		</div>

	@endforeach
	

<div class="clearfix"></div> 

@stop
