<?php
require('db.php');
if (isset($_POST['addpost'])) {
	$ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
	$pex=mysqli_real_escape_string($db,$_POST['post_excerpt']);
	$pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
	$cid=$_POST['post_category'];
	$image_name= $_FILES['post_image']['name'];

	$n=$image_name['0'];
	$folder = "../assets/images/".$image_name['0'];
	$query="insert into posts (title,excerpt,content,img,cat_id) values ('$ptitle','$pex','$pcontent','$n','$cid')";
	//die($query);
	$run=mysqli_query($db,$query);
	$post_id=mysqli_insert_id($db);
	
	$img_temp=$_FILES['post_image']['tmp_name']['0'];
	
	echo "<pre>";
	print_r($image_name);
	print_r($_FILES);
	
	
	
		if (move_uploaded_file($img_temp, $folder)) {
			$_SESSION['dltpost']='Successfully added post';
			header('location:../admin/index.php?managepost');
		}else{
			$_SESSION['dltpost']='Failed';
		}

} 

?>