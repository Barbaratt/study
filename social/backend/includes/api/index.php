<?php
	$path = "includes/functions/";
		#new user
			if(isset($_POST['new_user']))
			{
				include $path."newuser.php";
			}//
		#login
			if(isset($_POST['login']))
			{
				include $path."login.php";
			}//
		#lsearch
			if(isset($_POST['search']))
			{
				include $path."search.php";
			}//