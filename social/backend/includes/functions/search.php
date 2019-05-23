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

							// # get thumbnail
					$id_of_content_return = $row["path"];
									$string_ = "SELECT * FROM blogs WHERE `id`='$id_of_content_return' LIMIT 1";
										$query_return_ = mysqli_query($con, $string_)OR die("Without service!").mysqli_error();
											while( $row_ = mysqli_fetch_assoc($query_return_) )
											{
												$thumb = $row_['thumbnail'];
											}//end while



					
					switch ($row["type"]) {
							#################### BLOG
							case 'blog':
							
								?>
									<div class="col-12 col-md-4 open-media" type="blog" open-blog="<?php echo $row['path']; ?>"  data-toggle="modal" data-target="#open_media" style="background-image: url('<?php echo $thumb; ?>')">
										<br />
										<h5><?php echo $row['name']; ?></h5>
										<small><small><strong>Tags:</strong> <i><?php echo $row['tags']; ?></i></small></small>
									</div> 
									<!--/.col-12 col-md-4-->
								<?php
							break;
							#################### JPG
							case 'jpg' || 'image/png':
								?>
									<div class="col-12 col-md-4" style="background: url('<?php echo $row['path']; ?>')" open-image>
										<img src="" alt="" class="img-fluid"/>
										<!--/.image-crop-->
										<br />
										<h5><?php echo $row['name']; ?></h5>
										<p><?php echo $row['description']; ?></p>
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