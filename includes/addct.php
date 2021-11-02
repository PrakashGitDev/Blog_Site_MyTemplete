<?php
require 'db.php';
if (isset($_POST['addct'])) {
	$category_name=mysqli_real_escape_string($db,$_POST['category-name']);
	$query="INSERT INTO categories(cat_name) VALUES ('$category_name')";
	mysqli_query($db,$query);
	header('location:../admin/index.php?managecategory');
}
?>