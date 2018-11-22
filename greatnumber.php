<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Great Number Game</title>
	<style>
		body {
			text-align: center;
			font-family: Arial, sans-serif;
		}
	</style>

	</head>
	<body>
		<?php 
		session_start();

		$randomvalue = rand(0, 100);
		$_SESSION["random"] = $randomvalue; 

		?>

		<h1>Welcome to the Great Number Game!</h1>
		<h2>I am thinking of a number between 1 and 100.</h2>
		<h2>Take a guess!</h2>

		<form action="greatnumber2.php" method="POST">
			<input type="text" name="guess"><br>
			<input type="submit" name="submit">
		</form>

	</body>
</html>

