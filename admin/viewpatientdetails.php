<?php
session_start();
if (!isset($_SESSION['email']))
{
  header ("Location:../index.php");
}
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>


<script>
  function search() {
              var text = document.search_registration.txtsearch.value;
              var url = 'searchresult.php?txtsearch=' + text;
              request=new XMLHttpRequest(); 
              request.onreadystatechange=function() {
              if (request.readyState==4 && request.status==200) {
                 document.getElementById("results").innerHTML= request.
                 responseText;
              }
              }      
               request.open ("GET", url, true);
               request.send();    
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

          </div>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i><a  href="../logout.php">Logout</a></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admindashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>



      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Patient Name</th>
                    <th>Blood Type</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Hospital Name</th>
                    <th>Location</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Patient Name</th>
                    <th>Blood Type</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Hospital Name</th>
                    <th>Location</th>
                  <th>Delete</th>
                  <th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                 <?php
                 class show{
                  public $host="localhost";
                  public $user="root";
                  public $pass="";
                  public $db="bloodmanagement";
                  public $con;
                  public function __construct(){
                    $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
                  }
                  public function view(){
                    $sql="select * from addpatientdetail";
                    $res=$this->con->query($sql);
                    
                    foreach($res as $key => $row){
                      echo "<tr>";
                      echo "<td>".$row["name"]."</td>";
                      echo "<td>".$row["bloodtype"]."</td>";
                      echo "<td>".$row["age"]."</td>";
                      echo "<td>".$row["phone"]."</td>";
                      echo "<td>".$row["hospitalname"]."</td>";
                      echo "<td>".$row["location"]."</td>";




            echo "<td><a href='admindelete.php?id=$row[id]'><i class='fa fa-trash'></i></a></td>";  
            echo "<td><a href='adminedit.php?id=$row[id]'><i class='fa fa-edit'></i></a></td>";

                      echo "</tr>";

                    }

                  }
                }
                $obj=new show;
                $obj->view();
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>




    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
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
