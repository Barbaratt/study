<?php
	$user = $_POST['user'];
	$title = $_POST['title'];
	$blog_content = $_POST['blog_content'];
	$tags = $_POST['tags'];

	$check_email = mysqli_query($con, "SELECT * FROM `session` WHERE `id`='$user' ")or die("Query Error").mysqli_error();
		while($row = mysqli_fetch_array($check_email)) 
		{
			$email = $row['user'];
		}//end while
			mysqli_query($con, "INSERT INTO `blogs` (`id`, `user`, `title`, `thumbnail`, `tags`, `content`) VALUES (NULL, '$email', '$title', '', '$tags', '$blog_content');")or die("Query Error").mysqli_error();
					$last_id=mysqli_insert_id($con);
						mysqli_query($con, "INSERT INTO `media` (`id`, `name`, `description`, `tags`, `path`, `type`) VALUES (NULL, '$title', '', '$tags', '$last_id', 'blog');")or die("Query Error").mysqli_error();