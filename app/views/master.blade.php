<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            educ8 - Integrated Learning Environment
            @show
        </title>
        
        <link rel="icon" href="<?php echo URL::asset('assets/favicon.ico')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <!-- CSS are placed here -->
       
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        {{ HTML::style('bootstrap/css/bootstrap-responsive.css') }}
        {{ HTML::style('core/css/frontpage.css') }}

        <style>
        @section('styles')
            body {
            	 font-family: RobotoThin;
                padding-top: 60px;																																																																																																																																																																																																																																																																																																																																																																																																																											
            }
        @show
        </style>
    </head>

    <body>
    
    
        <!-- Navbar -->
        <!--<div id="navigation-bar" class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div  class="container">
                    
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="navbar-brand" href="#">educ8</a>

                    
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div> -->
        
        
        <!-- Fixed navbar -->
    <div id="navigation-bar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">educ8</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Why educ8?</a></li>
            <li><a href="#about">Features</a></li>
            <li><a href="#contact">Get Trial</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
            
          </ul>
          <a class="navbar-brand pull-right" href="#">educ8</a>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>

       

           <div class="jumbotron">
				  <div class="container">
				    
				  </div>
				</div>

       

        <!-- Scripts are placed here -->
        {{ HTML::script('bootstrap/js/jquery.min.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

    </body>
</html>

