<?php
require 'db.php';
if (isset($_GET['id'])) {
	$_SESSION["dltpost"]="succesfully deleted Post";
	$id=$_GET['id'];
	$query="DELETE FROM posts where id=$id";
	mysqli_query($db,$query);
	header('location:../admin/index.php?managepost');

}
else{
	header('location:../admin/index.php?managepost');
	$_SESSION["dltpost"]="Error Deleting";
}


?>