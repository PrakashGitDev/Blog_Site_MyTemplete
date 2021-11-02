<?php
require 'db.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$query="DELETE FROM categories where cat_id=$id";
	$_SESSION["dltcat"]="Succesfully Deleted Category";
	mysqli_query($db,$query);
	$_SESSION["dltmsg"]="succesfully deleted Category";
	header('location:../admin/index.php?managecategory');

}
else{
	header('location:../admin/index.php?managecategory');
}


?>