<?php
	$day = date('l');
	$date = date('j F Y');
	$datetime= date('c');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>what fucking day is it? it's <?=$day?></title>
	<link rel="icon" type="image/svg+xml" href="favicon.svg">
	<style>
		html {
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
		}
		body {
			color: #000;
			background: #FF52AE;
			margin: 0;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
			display: grid;
			justify-content: center;
			padding: 2em;
		}
		main {
			font-size: 2em;
		}
		footer {
			font-size: 1em;
		}
		a {
			color: #fff;
			background-color: #7A0F95;
			padding: .25em .5em;
			border-radius: 8px;
			font-weight: bold;
			white-space: nowrap;
			line-height: 3em;
		}
		a:hover {
			color: #99FF00;
		}
		time span { white-space: nowrap; }
	</style>
</head>
<body>
	<main role="main">
		<h1>it's fucking <time datetime="<?=$datetime?>"><span><?=$day?></span>, <span><?=$date?></span></time></h1>
		<p>it's ok. time is a fucking disintegrating construct these days.</p>
	</main>
	<footer>
		<p>this site is made with zero javascript and does not track you.</p>
		<p>if this made you chuckle and you're able, you can <a href="https://ko-fi.com/tattooeddev">buy me a cup of coffee</a>.</p>
		<p><a href="https://github.com/vfalconi/whatfuckingdayisit.com">view source</a></p>
	</footer>
</body>
</html>
