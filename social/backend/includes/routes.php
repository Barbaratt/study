<?php 
	#include API
	$explod = explode("/", $uri)[1];
	if($explod == 'api')
	{
		include "includes/api/index.php";
		die();
	}
	#include header
	include "includes/view/sitematrix/head.html";
	#home
		if($uri == '/')
		{
			include "includes/view/login/index.html";
		}
	#new account
		if($uri == '/new-account')
		{
			include "includes/view/newaccount/newaccount.html";
		}
	#set session
		if(explode('?',$uri)[0] == '/set_session')
		{
			include "includes/functions/set_session.php";
		}
	#dashboard
		if(explode('?',$uri)[0] == '/dashboard')
		{
			if(isset($_COOKIE['session']))
			{
				include "includes/functions/aprove_session.php";
			}//end if
			
		}
	#include footer
	include "includes/view/sitematrix/footer.html";
