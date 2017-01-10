<?php

	session_start();

$conn = mysqli_connect("localhost", "root", "", "lockspotlogin");

if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
}


