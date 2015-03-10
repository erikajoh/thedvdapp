<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The DVD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>

	    body {
			font-family: 'Avenir';
			background-color: #FBFBF8;
		}

		a, a:link, a:hover, a:visited, a:active {
			color: gray;
		}

		.flowers-right {
			height:100vh;
			right:0;
			float:right;
			position:fixed;
		}

		.flowers-left {
			height:100vh;
			left:0;
			float:left;
			position:fixed;
			-moz-transform: scaleX(-1);
	        -o-transform: scaleX(-1);
	        -webkit-transform: scaleX(-1);
	        transform: scaleX(-1);
	        filter: FlipH;
	        -ms-filter: 'FlipH';
		}

    </style>
</head>
<body>

<img src="{{asset('assets/flowers.png')}}" class="flowers-left">
<img src="{{asset('assets/flowers.png')}}" class="flowers-right">
<div class="container">
  @yield('content')
</div>

</body>
</html>