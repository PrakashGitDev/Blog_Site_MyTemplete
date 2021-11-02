<?php
require 'db.php';
if (isset($_POST['addpost'])) {
	$id=$_SESSION['id'];
	$ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
	$pex=mysqli_real_escape_string($db,$_POST['post_excerpt']);
	$pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
	$cid=$_POST['post_category'];
	$_SESSION["dltpost"]="succesfully updated Post";
	
	$query="UPDATE `posts` SET `title`='$ptitle',`excerpt`='$pex',`content`='$pcontent', `cat_id`='$cid' WHERE id='$id'";
	mysqli_query($db,$query);
	header('location:../admin/index.php?managepost');

}
else{
	header('location:../admin/index.php?managepost');
	$_SESSION["dltpost"]="Error updating";
}


?>