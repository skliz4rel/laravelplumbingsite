<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/styles.css"/>
        <title>Laravel</title>
    </head>

<body>
    <div class="container">
	<h1>Justin Bieber Official Songs</h1>

        @include('partial.nav')

		@yield('content')

		@yield('footer')
    </div>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> 
    </script>
</body>
</html>
