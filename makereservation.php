<!DOCTYPE html>
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
$phone=$_POST['phone'];
$location=$_POST['location'];   


$sql="insert into makereservation (name,phone,location) value 
('$name','$phone','$location')";
$query ="UPDATE `addpatientdetail` SET `status` = '1' where `id`='$id' ";

$res=$this->con->query($sql);
$res=$this->con->query($query);

if ($res){
   //echo "success";
    header('Location:viewpersonaldetails.php');
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
		<h1 style="color:red;">Provide personal Detail for receiver.</h1>
		<form id="registration_form" method="POST">
			<div>
				<input type="text" id="form_fname" name="name" required="" autocomplete="off">
								<label>
				Full Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_email" name="phone" required="" autocomplete="off">
								<label>Contact Number</label>	
			</div>
			
		
			<div>
				<input type="text" id="form_retype_password" name="location" required="" autocomplete="off">
				
				<label>Location</label>	
			</div>
         <span >
			<input type="submit" value="Make Appoinment" name="submit" style="color:red;">
		</span>
      </form>
	</div>
	
</body>
</html>