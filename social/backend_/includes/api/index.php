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
		#search
			if(isset($_POST['search']))
			{
				include $path."search.php";
			}//new_blog
		#search
			if(isset($_POST['new_blog']))
			{
				include $path."create_blog.php";
			}//search 
		#get_blog
			if(isset($_POST['get_blog']))
			{
				include $path."get_blog.php";
			}//get_blog 