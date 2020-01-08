

<?php  
class DB{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db="bloodmanagement";
    public $con;

public function __construct(){
    $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
}
public function searchi(){
  $inquiry =$_GET["txtsearch"]; 
  if($inquiry!=null)
  {
        
    $sql = "SELECT * from addpatientdetail where 
  (module like '$inquiry%' or location like '$inquiry%')";
 $res=$this->con->query($sql);
    if (!$res){
      echo "<p>Sorry we are unable to perform the task: "
    .mysql_error(); + "</p>";
    }
  $num= mysqli_num_rows($res);
if($num<=0) {
    echo "<p>No results found!!!</p>";
  }  else {
      echo "<table border='4' >";
      echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>BloodType</th>";
    echo "<th>Age</th>";
   
    echo "<th>Phone</th>";
    echo "<th>Hospital name</th>";
    echo "<th>Location</th>";
    
      echo "</tr>";
     
      $i=0;
    while($i<=($num)){
      $row = mysqli_fetch_array($res);
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['bloodtype'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['hospitalname'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";

       //echo "<td><a href='adminedit.php?id=$row[id]'>Apply Now</a></td></tr>";  
    
        echo "</tr>";
        $i++;
    }
      echo "</table>";

     
  }
   
	  } }}
      //mysqli_close($con);
  $obj=new DB;
$obj->searchi();

  ?>
