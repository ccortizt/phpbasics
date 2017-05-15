<?php
	include("config.php");
	
	$username = $_POST['usernamePost'];
	$password = $_POST['passwordPost'];
	$email = $_POST['emailPost'];
	
	$sql = "Insert INTO user (user_name,password,email) Values ('". $username ."','". $password."','". $email ."')";
	$result = mysqli_query($db,$sql);
	
	if(!result) echo "failed create new user";
	else echo "succes";
	
	
	
?>