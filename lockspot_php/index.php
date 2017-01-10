<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
			echo $_SESSION['id'];
	} 
	else {
		echo "<h4>You are not logged in!</h4>";
	}

	?>




</body>
</html>