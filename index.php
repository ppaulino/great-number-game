<?php 
	session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Guess the Number Game</title>
 	<link rel="stylesheet" type="text/css" href="styles.css">
 </head>
 <body>
 	<div id="container">
 		<div id="top">
 			<h1>Welcome to the Guess the Number Game!</h1>
 			<h2>I'm thinking of a number between 1 and 100...</h2>
 			<h3>Take a guess!</h3>
 		</div>

 		<?php
 			if(isset($_SESSION['low'])) {
 				echo $_SESSION['low'];
 				unset($_SESSION['low']);
 			}

 			if(isset($_SESSION['high'])) {
 				echo $_SESSION['high'];
 				unset($_SESSION['high']);
 			}

 			if(!isset($_SESSION['correct'])) {
 		?>

 		<div id="guess_field">
 			<form action="process.php" method="post">
	 			<input type="text" name="guess">
	 			<input type="submit" value="Submit">
 			</form>
 		</div>

 		<?php
 			} else {
 				echo $_SESSION['correct'];
 				unset ($_SESSION['correct']);
 			}
 		?>
 	</div>
 </body>
 </html>