<!DOCTYPE>
<html>
	<head>
		<title>@yield('pageTitle', 'Simple Notes')</title>

		<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link type='text/css' rel='stylesheet' href='css/style.css' />
	</head>
	<body>
		<aside>
			@yield('navigation')
		</aside>
		<section id="content">
			<header>
				<h1>@yield('siteTitle', 'Simple Notes')</h1>
			</header>

			@yield('content')

		</section>
	</body>
</html>