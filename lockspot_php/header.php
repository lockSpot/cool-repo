<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LockSpot</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php
				if (isset($_SESSION['id'])) {
				echo "<form action='includes/logout.inc.php'>
						<button>LOG OUT</button>
					</form>";
				} else{ 
					echo "<form action='includes/login.inc.php' method='POST'>
							<input type='text' name='uid' placeholder='Username'></input>
							<input type='password' name='pwd' placeholder='Password'></input>
							<button type='submit'>LOGIN</button>
							</form>";
				}
			?>
			<li><a href="signup.php">Sign Up</a></li>
		</ul>
	</nav>
</header>


