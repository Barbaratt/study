<?php
	$media = $_POST['media'];
	$type = $_POST['type'];

	#case blog ->
	if($type == "blog")
	{
		$media_return = mysqli_query($con, "SELECT * FROM `blogs` WHERE `id`='$media'")or die("We got a problem, try into some minutes").mysqli_error();
		while ($row_=mysqli_fetch_array($media_return))
			{ ?>
				<div class="title"><?php echo $row_['title']; ?></div> 
				<!--/.title-->	
				<div class="content"><?php echo $row_['content']; ?></div> 
				<!--/.content-->
	<?php	}//end while
	}//end blog
