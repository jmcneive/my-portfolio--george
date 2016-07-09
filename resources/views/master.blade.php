<!-- 

This is the Master layout blade for all pages.

-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Title</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <!-- Facebook --> 
	    <meta property="og:title" content="" />
	    <meta property="og:type" content="article" />
	    <meta property="og:image" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />

	    <!-- Twitter -->
	    <meta name="twitter:title" content="" />
	    <meta name="twitter:description" content="" />
	    <meta name="twitter:image" content="" />
	    <meta property="og:url" content="" />
	    
	    <!-- Favicons (auto generated via http://realfavicongenerator.net) -->
	    <link rel="shortcut icon" href="favicon.ico">
	    
	    <link rel="stylesheet" href="css/main.css">
	    
	    <script src="js/vendor/modernizr.min.js"></script>
	</head>

	<body>
	    <div class="page-container">


			@yield('content')



		</div>
	</body>
</html>