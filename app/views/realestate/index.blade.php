@extends('layout.default')

@section('title')
	Show
@stop

@section('content')
<h1>Latest Tenants Review</h1>
	
	@foreach($realestate as $rs)
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title"> <a href="{{$rs->id}}">
			@if($rs->unitNumber)
				{{ $rs->unitNumber }} / 
			@else

			@endif

			{{ $rs->streetNumber }}  {{ $rs->streetName }}  {{ $rs->streetSufix }}</a></h3>
			</div>
			
			
			@foreach($rs->realestateimage as $rsImage)
				<a href="{{$rs->id}}">
					<img 	src="img/{{ $rsImage->fileName}}" 
						alt="{{ $rs->streetNumber }}  {{ $rs->streetName }}  {{ $rs->streetSufix }}" 
						class="img-rounded" 
						style="max-width:150px;">
				</a>	
				<strong>File Name: {{ $rsImage->realestateId}}</strong><br />
				<strong>Last Updated:</strong><br />
				<strong>Rating:</strong><br />
				<strong>Price:</strong><br />
				<strong>Real Estate:</strong><br />
			@endforeach
		</div>


	@endforeach
	
<div class="clearfix"></div> 
	{{ $realestate->links()}}
<div class="clearfix"></div> 

@stop


@section('sidebar-right')
	<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    			<li><h3 class="highlight">Latest Feedbacks </h3></li>
                    			<?php if (Auth::check()){ ?>
                  			<li>{{ HTML::link('add', 'Add a Property', array('class' =>'btn btn-default'))}}</li>
                  			<?php } ?>
          				<li><a href="#">Link</a></li>
			</ul>
                
              	 </div>
      	</div>  

 @stop     		