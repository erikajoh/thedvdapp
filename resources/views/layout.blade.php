<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The DVD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style>

    	@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light);

	    body {
	    	display: block;
			font-family: 'Avenir';
			background-color: #FBFBF8;
			color: #008195;
		}

		h1, h2, h3, h4, h5 {
			font-family: 'Avenir Next';
			text-transform: uppercase;
			font-weight: normal;
		}

		strong {
			font-family: 'Avenir Next';
		}

		a, a:link, a:hover, a:visited, a:active {
			color: #C01A36;
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

		.btn {
			color: #C01A36;
		}

		.nav {
			padding-top: 10px;
			width: 100%;
			background: #C01A36;
			color: white;
		}

		.nav a {
			color: white;
			padding: 5px 10px;
		}

		.right {
			float: right;
			margin-right: 40px;
		}

		.left {
			float: left;
			margin-left: 40px;
		}

		p {
			font-family: 'Avenir';
			font-size: 14px;
		}

		.container {
			width: 100%;
		}

		.welcome {
			text-align: center;
			display: table;
			vertical-align: middle;
			margin: 20vh auto;
		}

		.title {
			font-size: 68px;
			margin-bottom: 20px;
			font-family: 'Shadows Into Light';
		}

		.quote {
			margin-bottom: 80px;
			color: #008195;
		}

    </style>
</head>
<body>

<div class="nav">
	<span class="left">
		<p>
			THE DVD APP
		</p>
	</span>
	<span class="right">
		<p>
			<a href="/">home</a> &nbsp;
			<a href="/dvds/search">search</a> &nbsp;
			<a href="/dvds/create">create</a> &nbsp;
			<a href="/dvds">view all</a> &nbsp;
			<a href="/about">about</a>
		</p>
	</span>
</div>

<div class="container">
  @yield('content')
</div>

</body>
</html>