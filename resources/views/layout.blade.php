<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">

        <title>SinasiCloud</title>
                
        <link href="css/bootstrap.css" rel="stylesheet">
	 
		<link href="css/main.css" rel="stylesheet">
	 
		<link rel="shortcut icon" href="images/favicon.png">
		<script src="js/pace.js"></script>
	 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    	
    </head>

    <body>

    	@yield('content')
    </body>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/nicescroll.js"></script>
	 
	 
	<script>

		$(function() {
	    	$('.scrollto, .gototop').bind('click',function(event){
				var $anchor = $(this);
				$('html, body').stop().animate({
	         		scrollTop: $($anchor.attr('href')).offset().top
	          	}, 1500,'easeInOutExpo');
	     		event.preventDefault();
	      	});
	  	});	       
	</script>
</html>
