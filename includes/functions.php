<?php
require('database.php');
function getwithclause($id='',$key='',$table='',$field='*',$order_field='',$type='',$limit='')
{
$obj=new query();
$cond_arr = array($key => $id);
$category=$obj->getData($table,$field,$cond_arr,$order_field,$type,$limit);	
if (isset($category['0'][$field])) {
	echo $category['0'][$field];
}else{
	echo "";
}

}

//getwithclause(2,'cat_id','categories','cat_name');
function countelements($id='',$key='',$table='',$field='*',$order_field='',$type='',$limit='')
{
$obj=new query();
$cond_arr = array($key => $id);
$category=$obj->getData($table,$field,$cond_arr,$order_field,$type,$limit);	
echo(count($category));
}

//countelements(1,'cat_id','posts');
/*
function search($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit='',$result='',$post_per_page='')
	{
		$sql="select $field from $table ";
		if ($condition_arr!='') {
			foreach ($condition_arr as $key => $value) {
				$sql.=" where $key like '%$value%' ";
			}	
		}
		if($order_by_field!=''){
			$sql.=" order by $order_by_field $order_by_type ";
		}
		
		if($result!='' && $post_per_page!=''){
			$sql.=" limit $result,$post_per_page ";
		}

	}
	$cond = array('title' => 'a' );
	search('posts','*',$cond,'id','desc','','0','5');
	*/
	
?>