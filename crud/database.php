<?php 
	abstract class Database {
		private $host;
		private $username;
		private $password;
		private $db_name;

		 protected function connect(){
			$this->host = 'localhost:3306';
			$this->username ='root';
			$this->password ='';
			$this->db_name ='demo';
			$con =new mysqli($this->host,$this->username,$this->password,$this->db_name);
			return $con;
		}
		 abstract protected function getData($table,$id);
	}
	class Query extends Database{
		public function getData($table,$id){
			$sql = 'select * from '.$table;
			if($id!=''){
				$sql .= "where id= $id";
			}
			$result =  $this->connect()->query($sql);
			if ($result->num_rows>=1){
				$arr=array();
				while($row = $result->fetch_assoc()){
					 $arr[]= $row;
				}
				return $arr;
			}else{
				return 0;
			}			
		}
		public function insertData($table,$field){
			$sql = "insert into $table values ".$field;
			print_r($sql);
		}
	}
	//$obj = new Database();
	//$obj->connect();

?>