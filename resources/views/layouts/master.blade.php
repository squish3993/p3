<!Doctype html>


<html>
	<head>

	    <title>
	    	@yield('title', 'P3')
	    </title>
	    
	    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	    <meta charset='utf-8'>
    	<link href="/css/p3.css" type='text/css' rel='stylesheet'>
	    
	    @stack('head')

	</head>

	<body>
		<section>
			<div class="jumbotron container">
				<h1 class="display-3 text-center">
					@yield('jumboHeader')
				</h1>

				<p class='message text-center'> 
					@yield('tagline')
				</p>
			</div>
		</section>


		<section>
			@yield('form')
		</section>

		<section>			
				@yield('result')
		</section>
	</body>
</html>