<?php
	$user = $_POST['user'];
	$title = $_POST['title'];
	$blog_content = $_POST['blog_content'];
	$tags = $_POST['tags'];


	//create a folder to the new image
		$newFolder = uniqid().md5();
			mkdir('library/__w/'.$newFolder, 0777, true);
				//upload file
					//check of is empty
						if($_FILES['thumbnail']['name']!="")
						{
							move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'library/__w/'.$newFolder.'/'.$_FILES['thumbnail']['name']);
							$path = 'library/__w/'.$newFolder.'/'.$_FILES['thumbnail']['name'];
						}
						else{
							$path = 'library/__w/'.$newFolder.'/'.$_FILES['thumbnail']['name'];
						}//end if
		$check_email = mysqli_query($con, "SELECT * FROM `session` WHERE `id`='$user' ")or die("Query Error").mysqli_error();
			while($row = mysqli_fetch_array($check_email)) 
			{
				$email = $row['user'];
			}//end while
				mysqli_query($con, "INSERT INTO `blogs` (`id`, `user`, `title`, `thumbnail`, `tags`, `content`) VALUES (NULL, '$email', '$title', '$path', '$tags', '$blog_content');")or die("Query Error").mysqli_error();
						$last_id=mysqli_insert_id($con);
							mysqli_query($con, "INSERT INTO `media` (`id`, `name`, `description`, `tags`, `path`, `type`) VALUES (NULL, '$title', '', '$tags', '$last_id', 'blog');")or die("Query Error").mysqli_error();
									//UPLOAD THUMBNAIL
										$type = $_FILES['thumbnail']['type'];
												mysqli_query($con, "INSERT INTO `media` (`id`, `name`, `description`, `tags`, `path`, `type`) VALUES (NULL, 'file', '$type', '$tags', '$last_id', '$type');")or die("Query Error").mysqli_error();

