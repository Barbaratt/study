<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	$about = $_POST['about'];
	mysqli_query($con, "INSERT INTO `user` (id, email, name, pass, about) VALUES (NULL, '$email', '$name', '$pass', '$about')")or die("Query error!").mysqli_error();
	$last_id = mysqli_insert_id($con);
	mysqli_query($con, "INSERT INTO `session` (id, user) VALUES ('$last_id', '$email')")or die("Query error!").mysqli_error();

	echo $last_id;