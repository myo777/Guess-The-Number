<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Great Number Game</title>
	    <link href="guessnumber.css" rel="stylesheet" type="text/css">
	<style> 
		
	</style>

	</head>
	<body>
		
		<h1>Welcome to the Great Number Game!</h1>
		<h2>I am thinking of a number between 1 and 100.</h2>
		<h2>Take a guess!</h2>

		<?php
		session_start();
				
		$guess = $_POST['guess'];
        

		if ($guess > $_SESSION["random"]) {
			echo "<div class='wrong'>";
			echo $guess . " is too high! Try again below.";
			echo "</div>";
			echo "<form action='greatnumber2.php' method='POST'>";
			echo "<input type='text' name='guess'><br>";
			echo "<input type='submit' name='submit'>";
			echo "</form>";

		} elseif ($guess < $_SESSION["random"]) {
			echo "<div class='wrong'>";
			echo $guess . " is too low! Try again below.";
			echo "</div>";
			echo "<form action='greatnumber2.php' method='POST'>";
			echo "<input type='text' name='guess'><br>";
			echo "<input type='submit' name='submit'>";
			echo "</form>";
		
		} elseif ($guess == $_SESSION["random"]) {
			echo "<div class='correct'>";
			echo "<p> " . $guess . " is the number! Congratulations! </p><br>";
			echo "<button><a href='greatnumber.php'>Play again</a></button>";
			echo "</div>";
            echo "<div class='playagain'>";
            echo "<p>clicking on 'play again' resets the session and starts the game again</p>";
            echo "</div>";
			session_destroy();  //button
		}
		?>
		
	</body>
</html>


