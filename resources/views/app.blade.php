<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Blog</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<script type="text/javascript">
		window.blog_post_model = "{!! addslashes(json_encode($model)) !!}"
	</script>
</head>
<body>

	<div>
	</div>

	<div id="app">
		<h1>
			@{{ model }}
		</h1>
	</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"> </script>
</body>
</html>
