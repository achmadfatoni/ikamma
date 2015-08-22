<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>I K A M M A</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" type="text/css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" type="text/css" rel="stylesheet"/>

    <!-- custom css -->
    <link href="/assets/css/custom.css" type="text/css" rel="stylesheet"/>


    @yield('css')
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!!URL::to('/')!!}">I K A M M A</a>
        </div>
        <div class="navbar-collapse collapse">
            @include('layouts.menu')
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	{{--<div id="ww">--}}
	    <div class="container min-height">
				@yield('contents')
	    </div> <!-- /container -->
	{{--</div><!-- /ww -->--}}

	
<!-- +++++ Footer Section +++++ -->

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 centered">
				    <p>&copy;Copyright <a href="#"> Achmad Fatoni</a> 2015</p>
				</div>
			</div>

		</div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    @yield('js')
  </body>
</html>
