<?php 
	session_start();

	if(!isset($_SESSION['number'])) {
		$_SESSION['number'] = rand(1,100);
	}

	if(isset($_POST['guess'])) {
		if($_POST['guess'] == $_SESSION['number']) {
			$_SESSION['correct'] =
				"<div class='correct'>
					<p>" . $_SESSION['number'] . " is the number!</p>
					<form action='process.php' method='post'>
						<input type='hidden' name='reset' value='reset'>
						<input type='submit' value='Restart'>
					</form>
				</div>";
		}
		elseif($_POST['guess'] < $_SESSION['number']) {
			$_SESSION['low'] =
				"<div class='incorrect'>
					<p>TOO LOW</p>
				</div>";
		}

		else {
			$_SESSION['high'] =
				"<div class='incorrect'>
					<p>TOO HIGH</p>
				</div>";
		}
	}

	if(isset($_POST['reset']) && $_POST['reset'] == 'reset') {
		session_destroy();
		header("Location: index.php");
	}

	header("Location: index.php");
 ?>