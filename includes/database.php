<?php 
class database{
	private $host;
	private $dbusername;
	private $dbpassword;
	private $dbname;
	
	protected function connect(){
		$this->host='localhost';
		$this->dbusername='root';
		$this->dbpassword='root';
		$this->dbname='techblog';
		$con=new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
		return $con;
	}
}

class query extends database{
	public function getData($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit='',$result='',$post_per_page=''){
		$sql="select $field from $table ";
		if($condition_arr!=''){
			$sql.=' where ';
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
		}
		if($order_by_field!=''){
			$sql.=" order by $order_by_field $order_by_type ";
		}
		
		if($limit!=''){
			$sql.=" limit $limit ";
		}
		//die($sql);
		$result=$this->connect()->query($sql);
		if($result->num_rows>0){
			$arr=array();
			while($row=$result->fetch_assoc()){
				$arr[]=$row;
			}
			return $arr;
		}else{
			return 0;
		}
	}
	public function search($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit='',$result='',$post_per_page='')
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
		//die($sql);
		$result=$this->connect()->query($sql);
		if($result->num_rows>0){
			$arr=array();
			while($row=$result->fetch_assoc()){
				$arr[]=$row;
			}
			return $arr;
		}else{
			return 0;
		}

	}
}
/**
 * 
 */
	
	
?>







