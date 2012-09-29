<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<% base_tag %>
	$MetaTags 
	
	<!-- Meta Tags -->
	<meta name="description" content="">
	<meta name="author" content="Kayleigh O'Mahoney">
	<meta name="viewport" content="width=1000">
	
	<!-- Icons -->
	<link rel="shortcut icon" href="themes/default/i/favicon.ico">
	<link rel="apple-touch-icon" href="themes/default/i/apple-touch-icon.png">

	<!-- CSS -->
	<% require css(themes/default/css/reset.css) %>
	<% require css(themes/default/css/layout.css) %>
	
	<!-- JS -->
	<% require javascript(themes/default/js/libs/jQuery.js) %>
	<% require javascript(themes/default/js/script.js) %>
	
	<!--[if lt IE 9]><script src="themes/default/js/libs/html5.js"></script><![endif]-->
</head>
<body>
	<% include Header %>
	<div id="main">
		<% include Navigation %>
		<div class="wrapper">
			$Layout
		</div>			
	</div>
	<% include Footer %>
</body>
</html>