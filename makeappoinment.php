<?php

class DB{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db="bloodmanagement";
    public $con;
//include_once ("connect.php");
public function __construct(){
    $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
}
public function insertdata(){

if(isset($_POST['submit'])){
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$location=$_POST['location'];   


$sql="insert into makedonation (name,email,location) value 
('$name','$email','$location')";
//$query ="UPDATE markers SET `status` = '1' where `id`='$id' ";

$res=$this->con->query($sql);
//$res=$this->con->query($query);

if ($res){
   //echo "success";
    header('Location:viewdonors.php');
}   
else{
    echo  "Insert failed";
}
}   
}
}
$obj=new DB;
$obj->insertdata();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hover Placeholder With Validation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<h1 style="color:red;">Request appointmen.</h1>
		<form id="registration_form" action="" method="POSt">
			<div>
				<input type="text" name="name" id="form_fname" name="" required="" autocomplete="off">
								<label>
				Full Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_email" name="email" required="" autocomplete="off">
								<label>Contact Number</label>	
			</div>
		
			<div>
				<input type="password" id="form_retype_password" name="location" required="" autocomplete="off">
				
				<label>Location</label>	
			</div>
         <span >
			<input type="submit" value="Make Appoinment" name="submit" style="color:red;">
		</span>
      </form>
	</div>
	
</body>
</html>