<?php
	include 'header.php';
?>

<main>
<?php
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !==false){
		echo "Fill out all fields!";
	}
	elseif (strpos($url, 'error=username') !==false){
		echo "Username already exists!";
	}

	if (isset($_SESSION['id'])) {
			echo $_SESSION['id'];
	} 
	else {echo "<h4>You are not logged in!</h4>";}

	
	if (isset($_SESSION['id'])) {
			echo "Your are already logged in!";
	} 
	else {
		echo "<form action='includes/signup.inc.php' method='POST'>
				<input type='text' name='first' placeholder='Firstname'></input><br>
				<input type='text' name='last' placeholder='Lastname'></input><br>
				<input type='text' name='uid' placeholder='Username'></input><br>
				<input type='password' name='pwd' placeholder='Password'></input><br>
				<button type='submit'>SIGN UP!</button>
			</form>";
	}

	?>


</main>


</body>
</html>