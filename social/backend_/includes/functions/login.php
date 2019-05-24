<?php
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
		$query = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email' ")or die("Query error!").mysqli_error();
				$row = mysqli_fetch_array($query);
					$key = $row[3];
						if($key == $pass)
						{
							$query = mysqli_query($con, "SELECT COUNT(id) as id FROM `session`")or die("Query error!").mysqli_error();
								$row = mysqli_fetch_array($query);
								$session = $row[0]+1;
								mysqli_query($con, "INSERT INTO `session` (id, user) VALUES ('$session', '$email')")or die("Query error!").mysqli_error();
								echo $session;
						}else{
							echo "nofound";
						}