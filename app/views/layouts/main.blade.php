<!DOCTYPE html>
<html>
	<head>
		<title>SACF Event Manager</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="<?= asset('css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?= asset('css/main.css'); ?>" rel="stylesheet" media="screen">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="../../assets/js/html5shiv.js"></script>
		  <script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">

			@yield("content")

		</div> <!-- /container -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?= asset('js/bootstrap.min.js') ?>"></script>
	</body>
</html>