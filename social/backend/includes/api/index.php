<?php
	$path = "includes/functions/";
		#new user
			if(isset($_POST['new_user']))
			{
				include $path."newuser.php";
			}//