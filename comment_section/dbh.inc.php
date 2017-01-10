<?php

$conn = mysqli_connect('localhost', 'root', '', 'comment_section');

if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}