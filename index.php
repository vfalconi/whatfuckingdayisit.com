<?php
	$day = date('l');
	$date = date('j F Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>what fucking day is it? it's <?=$day?></title>
	<link rel="icon" type="image/svg+xml" href="favicon.svg">
	<style>
		@font-face {
			font-family: system;
			font-style: normal;
			font-weight: 300;
			src: local(".SFNSText-Light"), local(".HelveticaNeueDeskInterface-Light"), local(".LucidaGrandeUI"), local("Ubuntu Light"), local("Segoe UI Light"), local("Roboto-Light"), local("DroidSans"), local("Tahoma");
		}
		html {
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
		}
		body {
			color: #000;
			background: #FF52AE;
			margin: 0;
			font-family: "system";
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
		a:link {
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
	</style>
</head>
<body>
	<main role="main">
		<h1>it's fucking <?=$day?>, <?=$date?></h1>
		<p>it's ok. time is a fucking disintegrating construct these days.</p>
	</main>
	<footer>
		<p>this site is made with zero javascript and does not track you.</p>
		<p>if this made you chuckle and you're able, you can <a href="https://ko-fi.com/tattooeddev">buy me a cup of coffee</a>.</p>
		<p><a href="http">view source</a></p>
	</footer>
</body>
</html>
