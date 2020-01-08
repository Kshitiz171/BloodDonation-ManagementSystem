<?php
class delete{
	public $host="localhost";
	public $user="root";
    public $pass="";
    public $db="bloodmanagement";
    public $con;

    public function __construct(){
	$this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
}
public function deleting(){
$id=$_GET['id'];

$sql="delete from addpatientdetail where id=$id";
$res=$this->con->query($sql);
if($res){
	header('Location:viewpatientdetails.php');
}
}
}

$obj=new delete;
$obj->deleting();
?>