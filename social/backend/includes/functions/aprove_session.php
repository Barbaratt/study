<?php
	$session_id = $_COOKIE['session'];
	$session_email = $_COOKIE['email'];
	$query = mysqli_query($con, "SELECT * FROM `session` WHERE `id` = '$session_id' ")or die("Query error!").mysqli_error();
				$row = mysqli_fetch_array($query);
					if($row["user"] == $session_email)
					{
						include "includes/view/dashboard/dashboard.html";				
					}