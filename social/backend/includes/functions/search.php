<?php 
	$data = $_POST["data"];
	$data = explode(" ", $data);
	$query = "";
	$i=1;
		foreach ($data as $key => $item) {
			if($item==""){}else{
				if($i==1){
					$i++;
					$query .= "WHERE tags LIKE '%$item%'";
				}else{
					$query .= " OR tags LIKE '%$item%'";
				}//end if
			}//end if empty
		}// end foreach
		$string = "SELECT * FROM media ".$query;
			$query_return = mysqli_query($con, $string)OR die("Without service!").mysqli_error();
				while( $row = mysqli_fetch_assoc($query_return) ){
					switch ($row["type"]) {
							#################### JPG
							case 'jpg':
								?>
									<div class="col-12 col-md-4" open-image>
										<div class="image-crop">
											<img src="<?php echo $row['path']; ?>" alt="" class="img-fluid"/>
										</div> 
										<!--/.image-crop-->
										<br />
										<h5><?php echo $row['name']; ?></h5>
										<p><?php echo $row['description']; ?></p>
									</div> 
									<!--/.col-12 col-md-4-->
								<?php
							break;
							#################### BLOG
							case 'blog':
								?>
									<div class="col-12 col-md-4 open-media" type="blog" open-blog="<?php echo $row['path']; ?>"  data-toggle="modal" data-target="#open_media">
										<br />
										<h5><?php echo $row['name']; ?></h5>
										<small><small><strong>Tags:</strong> <i><?php echo $row['tags']; ?></i></small></small>
									</div> 
									<!--/.col-12 col-md-4-->
								<?php
							break;
						
							default:
								# code...
							break;
					}
				}// end while
?>