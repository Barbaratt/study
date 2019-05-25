<?php
	class mysql 
	{
		public $host = "localhost";
		public $user = "root";
		public $pass = "root";
		public $data = "study";
	}//end class
	$mysql = new mysql;
		$con =	mysqli_connect($mysql->host, $mysql->user, $mysql->pass, $mysql->data)or die("Connect error").mysqli_error();
			mysqli_select_db($con, $mysql->data)or die("Select DB error").mysqli_error();