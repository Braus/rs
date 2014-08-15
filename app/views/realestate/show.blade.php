@extends('layout.default')

@section('title')
	Show
@stop

@section('content')
	<div class="col-md-9">
		<h1>{{ $realestate->streetNumber }}  {{ $realestate->streetName }}  {{ $realestate->streetSufix }}</h1>
	</div>	
	@foreach($realestate->realestatereview as $rsReview)
		<div class="col-md-3">
			<strong>Price: </strong>${{ $rsReview->cost }}<br />
			<strong>Review: </strong>{{ date('d-m-Y', strtotime($rsReview->reviewDate)) }}<br />
		</div>
	@endforeach	
	<div class="clearfix"></div>
	<div class="image"> 
		@foreach($realestate->realestateimage as $rsImage)
		<img 	src="img/{{ $rsImage->fileName }}" 
			alt="{{ $realestate->streetNumber }}  {{ $realestate->streetName }}  {{ $realestate->streetSufix }}" 
			class="img-rounded"
			style="max-width:500px;">
		@endforeach
		
	</div>

	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="rs-details">
			@foreach($realestate->realestatereview as $rsReview)
				<h3>Reason to move out:</h3><p>{{ $rsReview->reason }}</p>
				<h3>Comments</h3>
				<p>{{ $rsReview->comment }}</p>
				
				
				
				
			@endforeach	
			</div>
		</div>
	</div>	


	

<div class="clearfix"></div> 

@stop



@section('sidebar-right')
	<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    			<li><h3 class="highlight">Location</h3></li>
                    			<?php if (Auth::check()){ ?>
                  			<li>{{ HTML::link('add', 'Add a Property', array('class' =>'btn btn-default'))}}</li>
                  			<?php } ?>
                  			@foreach($realestate->realestatereview as $rsReview)
          					<li><strong>Real Estate: </strong>{{ $rsReview->realEstate }}</li>
          						
          					<li><strong>Lease Started:</strong>  {{ date('d-m-Y',  strtotime($rsReview->contractStart)) }}</li>
          					<li><strong>Lease Ended:</strong>  {{ date('d-m-Y',  strtotime($rsReview->contractEnd)) }}</li>
          				@endforeach

			</ul>
                
              	 </div>
      	</div>  

 @stop     		