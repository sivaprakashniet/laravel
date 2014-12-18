<!doctype html>
<html>
<head>
<title>Asareri | home</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
{{ HTML::style('css/redactor.css'); }}
{{ HTML::script('js/jquery-1.9.0.min.js'); }}
{{ HTML::script('js/redactor.js'); }}
<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('.redactor').redactor();
		}
	);
</script>
</head>
<body>
	<div class="container">
		<header class="row">
			@include('includes.header')
		</header>
		<div id="main" class="row">
				@yield('content')
		</div>
		<footer class="row">
			@include('includes.footer')
		</footer>
	</div>
</body>
</html>