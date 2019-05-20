<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	$about = $_POST['about'];
	mysqli_query($con, "INSERT INTO `user` (id, email, name, pass, about) VALUES (NULL, '$email', '$name', '$pass', '$about')")or die("Query error!").mysqli_error();


	$query = mysqli_query($con, "SELECT COUNT(id) as id FROM `session`")or die("Query error!").mysqli_error();
		$row = mysqli_fetch_array($query);						
			$last_id = $row[0];
	mysqli_query($con, "INSERT INTO `session` (id, user) VALUES ('$last_id', '$email')")or die("Query error!").mysqli_error();

	echo $last_id;