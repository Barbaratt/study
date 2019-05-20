<?php
	$cookie_name = "session";
	$cookie_value = explode('?session=',$_SERVER['REQUEST_URI'])[1];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			$query = mysqli_query($con, "SELECT * FROM `session` WHERE `id` = '$cookie_value' ")or die("Query error!").mysqli_error();
				$row = mysqli_fetch_array($query);
					$email = $row[1];
					$cookie_name = "email";
						setcookie($cookie_name, $email, time() + (86400 * 30), "/");
		header('Location: /dashboard');
