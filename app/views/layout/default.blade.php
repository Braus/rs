
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Rate my Real Estate - @yield('title')</title>
        
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

        <!-- CSS code from Bootply.com editor -->
        {{HTML::style('css/custom.css')}}
	
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        


<header class="masthead">
      <div class="container">
          <div class="row">
                <div class="col col-sm-12">
                      <h1 class="logo"><a href="#" title="scroll down for your viewing pleasure">Rate my Real Estate</a></h1>
                </div>
          </div>
      </div>
      <div class="container">
        	<div class="row">
                      <div class="col col-sm-12">
                             <div class="panel">
                                    <div class="panel-body">
                                      Let the next Tenant knows about your property.
                                    </div>
                              </div>
                      </div>
          	</div>
   </div>
</header>

<div class="navbar navbar-static">
    <div class="container">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <div class="nav-collapse collase">
        <ul class="nav navbar-nav">  
          <li>{{ HTML::link('/', 'Home')}}</li>
          <li>{{ HTML::link('about-us', 'About Us')}}</li>
          <li>{{ HTML::link('how-to-use', 'How to Use')}}</li>
		  <li>{{ HTML::link('feedback', 'Feedback')}}</li>
        </ul>
        <ul class="nav pull-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
     				<button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
              </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
				<?php if (!Auth::check()){ ?>
              <li><a href="{{ URL::to('login') }}">Login/Register</a></li>
			  <?php }else { ?>
				  
				  <li>{{ HTML::link('profile', 'Profile')}}</li>
				  <li>{{ HTML::link('add', 'Add a Property')}}</li>
				   <li class="divider"></li>
				  <li><a href="{{ URL::to('logout') }}">Logout</a></li>
				  <?php } ?>
          
             </ul>
          </li>  
        </ul>
      </div>		
    </div>
</div><!-- /.navbar -->
<!-- Begin Body -->
<div class="container">
	<div class="row">
              <div class="sidebar-right">
  			@yield('sidebar-right')
              </div>
      		<div class="col col-sm-9">
                  <div class="panel">
                          <div class="row">
                     	      <div class="col col-sm-12">
                                      <div class="welcome">
		
		                              @yield('content') 
        		                    </div>
  		                    </div> 
          	             </div>
                    </div>
      	       </div> 
  	</div>
</div>

 <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
{{HTML::script('js/custom.js')}}




        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
       
    </body>
</html>