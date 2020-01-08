 <?php
class edit{ 
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db="bloodmanagement";
    public $con;

    public function __construct(){
    $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
}
public function edited(){
    $id=$_GET['id'];
    $sql="select * from notifications where id=$id";
    $res=$this->con->query($sql);
    
if($res){
    while($row=mysqli_fetch_array($res)){
        return $row;
    
    }
}
}


public function update(){
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
$date1=$_POST['date1'];
$event=$_POST['event'];
$location=$_POST['location'];
   

     $sql="update notifications set name='$name',date1='$date1',event='$event',location='$location' where id=$id";
     $res=$this->con->query($sql);
header("Location:viewpublishnews.php"); 
}
}

}



//$obj = new updated;


$obj=new edit;
$row1 = $obj->edited();
 $obj ->update();
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blood Management System.</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">

<script>
function myFunction() {
    alert("Successfully Edited!");
}
</script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Blood Management.</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admindashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="addpatientdetails.php">
           <i class="fa fa-fw fa-plus"></i>
           <span class="nav-link-text">Add Patient Details.</span>
         </a>
       </li>
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="viewpatientdetails.php">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">View Patient Details.</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="viewuserdetails.php">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">View Users.</span>
        </a>
      </li> 
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="publishnews.php">
          <i class="fa fa-fw fa-calendar"></i>
          <span class="nav-link-text">Add Events and Donation Camps.</span>
        </a>
      </li> 
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="viewpublishnews.php">
          <i class="fa fa-fw fa-clipboard"></i>
          <span class="nav-link-text">View Events and Donation Camps.</span>
        </a>
      </li>
    </ul>
    
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">      
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>



  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Edit News or Events.</div>
        <div class="card-body">
          <form method="POST" action="">
            <div class="form-group">
              <label for="exampleInputEmail1">Event Name</label>
              <input class="form-control" name="name" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Events Name" autocomplete="off" value="<?php echo $row1['name']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input class="form-control" name="date1" id="exampleInputPassword1" type="date" placeholder="Patient Age" autocomplete="off" value="<?php echo $row1['date1']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Event Description.</label>
                            <textarea name="event" class="save-desc" placeholder="Describe event description here" maxlength="700" value="<?php echo $row1['event']; ?>"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Location</label>
              <input class="form-control" name="location" id="exampleInputPassword1" type="text" placeholder="Detail Hospital Location" autocomplete="off" value="<?php echo $row1['location']; ?>">
           

            </div>


                        <button type="submit"  onclick="myFunction()" class="form-control" id="cf-submit" name="submit">Edit</button>
          </form>

        </div>
      </div>
    </div>



    <footer class="sticky-footer">

    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
