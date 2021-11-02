<?php
function getcategory($db,$id){
	$query = "select * from categories where cat_id=$id";
	$run = mysqli_query($db,$query);
	$row = mysqli_num_rows($run);
	$data = mysqli_fetch_assoc($run);
	if ($row>=1) {
		return $data['cat_name'];
	}else{
		echo "";
	}
	

}
function getpostcatid($db,$id){
	$query = "select * from posts where id=$id";
	$run = mysqli_query($db,$query);
	$row = mysqli_num_rows($run);
	$data = mysqli_fetch_assoc($run);
	if ($row>=1) {
		return $data['cat_id'];
	}else{
		echo "";
	}
	

}

function getpostbycat($db,$catid){
	$query = "select * from posts where cat_id=$catid";
	$run = mysqli_query($db,$query);
	$row = mysqli_num_rows($run);
	echo "$row";
	

}

function getallcategory($db){
	$query = "select * from categories";
	$run = mysqli_query($db,$query);
	$row = mysqli_num_rows($run);
	$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
	return $data;
	/*
	$data = array();
	if ($row>=1) {
	while ($d = mysqli_fetch_array($run)) {
		$data[] = $d;
	}
	return $data;
	}else{
		echo " ";
	}
	*/
}
/*
function getimagesbypost($db,$post_id){
	$query = "select * from images where post_id=$post_id";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_assoc($run)) {
		$data[] = $d;
	}
	return $data;
}
function getimagesbypostno($db,$post_id){
	$query = "select * from images where post_id=$post_id";
	$run = mysqli_query($db,$query);

	return mysqli_num_rows($run);
}

function getsubmenu($db,$menu_id){
	$query = "select * from submenu where parent_menu_id=$menu_id";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_array($run)) {
		$data[] = $d;
	}
	return $data;
}
function getmenu($db){
	$query = "select * from menu";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_array($run)) {
		$data[] = $d;
	}
	return $data;
}
function getallsubmenu($db){
	$query = "select * from submenu";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_array($run)) {
		$data[] = $d;
	}
	return $data;
}
function getsubmenuNo($db,$menu_id){
	$query = "select * from submenu where parent_menu_id=$menu_id";
	$run = mysqli_query($db,$query);

	return mysqli_num_rows($run);
}
function getparentmenuname($db,$pid){
	$query = "select * from menu where id='$pid'";
	$run = mysqli_query($db,$query);
	$data = mysqli_fetch_assoc($run);

	return $data;
}
function getcommentsbypost($db,$post_id){
	$query = "select * from comment where post_id=$post_id  order by id desc";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_assoc($run)) {
		$data[] = $d;
	}
	return $data;
}
function getcomments($db){
	$query = "select * from comment order by id desc";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_assoc($run)) {
		$data[] = $d;
	}
	return $data;
}
*/
function getadmininfo($db,$email){
	$query = "select * from admin where email='$email'";
	$run = mysqli_query($db,$query);
	$data = mysqli_fetch_assoc($run);

	return $data;
}
function getposts($db){
	$query = "select * from posts order by id desc";
	$run = mysqli_query($db,$query);
	$data = mysqli_fetch_all($run,MYSQLI_ASSOC);
	return $data;
	/*
	$data = array();

	while ($d = mysqli_fetch_array($run)) {
		$data[] = $d;
	}
	return $data;
	*/
}

function getpostbyid($db,$id){
	$query = "select * from posts where id=$id";
	$run = mysqli_query($db,$query);
	$data = array();

	while ($d = mysqli_fetch_assoc($run)) {
		$data[] = $d;
	}
	return $data;
}

?>