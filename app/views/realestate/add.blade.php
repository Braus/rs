@extends('layout.default')

@section('content')
<div class="form-horizontal" >
  	<div class="form-group">
		<h1> Add a Real Estate Review</h1>

		{{ Form::open(array('url' => 'add', 'files'=>true)) }}
		{{ Form::token() }}	
			<div class="col-sm-5">

				{{ Form::hidden('id') }}
		
				{{ Form::text('streetNumber',  '' ,array('class' => 'form-control', 'placeholder' => 'Street Number')) }}
			
				{{ Form::text('unitNumber',  '' ,array('class' => 'form-control' , 'placeholder' => 'Unit Number')) }}
			
				{{ Form::text('streetName',  '' ,array('class' => 'form-control' , 'placeholder' => 'Street Name')) }}
			
				{{ Form::text('streetSufix',  '' ,array('class' => 'form-control', 'placeholder' => 'Street Suffix'))}}
		
				{{ Form::select('houseType', array(' ' => 'House Type',
									'apartment' => 'Apartment',
									'unit' => 'Unit',
									'sharehouse' => 'Share House', 
									'house' => 'House',
									'townhouse' => 'Townhouse',
									'other' => 'Other'), 'Select your House Type', array('class' => 'form-control'))}}
			
				{{ Form::text('suburb',  '' ,array('class' => 'form-control', 'placeholder' => 'Suburb'))}}
			
				{{ Form::text('postcode',  '' ,array('class' => 'form-control' , 'placeholder' => 'PostCode'))}}
			
				{{ Form::select('state', array(' ' => 'State',
								'QLD' => 'QLD',
								'SA' => 'SA',
								'WA' => 'WA', 
								'NT' => 'NT',
								'NSW' => 'NSW',
								'VIC' => 'VIC',
								'TAS' => 'TAS'), 'Select your State', array('class' => 'form-control'))}}
				
				{{ Form::file('fileName') }}

			</div>
			<div class="col-sm-5">
				

				{{ Form::text('contractStart',  '' ,array('class' => 'form-control' ,  'id' => 'datepicker', 'placeholder' => 'Contract Started at')) }}

				{{ Form::text('contractEnd',  '' ,array('class' => 'form-control' ,  'id' => 'datepicker', 'placeholder' => 'Contract Ended at')) }}

				{{ Form::text('realEstate',  '' ,array('class' => 'form-control' ,'placeholder' => 'Real Estate')) }}

				{{ Form::text('cost',  '' ,array('class' => 'form-control' , 'placeholder' => 'Price')) }} 

				{{ Form::text('reason',  '' ,array('class' => 'form-control' , 'placeholder' => 'Reason of Leaving')) }} 

				{{ Form::textarea('comment',  '' ,array('class' => 'form-control' , 'placeholder' => 'Additional Comments?')) }} 


			</div>
		
		<div class="clearfix"></div> 
		<div class="submit-button"> 
			{{ Form::submit('Submit', array('class' => 'btn btn-primary', 'style' => 'width:200px;'))}}
		</div>
		{{ Form::close() }}
	</div>
</div>

	
@stop
@section('sidebar-right')
	<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    			<li><h3 class="highlight">Options</h3></li>
                    			<?php if (Auth::check()){ ?>
                  			<li>{{HTML::link('/','Show List', array('class' => 'btn btn-default'))}}</li>
                  			<?php } ?>
          				<li><a href="#">Link</a></li>
			</ul>
                
              	 </div>
      	</div>  	

	
@stop