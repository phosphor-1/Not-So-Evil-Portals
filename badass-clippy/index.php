<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<!--Epic badass skull memes with da clippy fo today-->
<html>
	<header>
		<center>
			<h1>Welcome to BadassNet</h1>
			<h2>The World's Most Badass Free Internet</h2>
			<p>Please enter your Facebook info to continue: </p>
			<p>Username: </p><input type="text"><br>
			<p>Password: </p><input type="text"><br>
		</center>
	</header>
	<body>
		<center>
			<figure>
				<img src="images/skull1.png" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull2.png" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull3.jpg" style="width:500px;height:500px">
			</figure>
    
			<figure>
				<img src="images/skull4.jpg" style="width:500px;height:500px">
			</figure>
		</center>
	</body>
</html>