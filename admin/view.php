
<?php
include("functions.php");
$id = $_GET['id'];
$query ="UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
performQuery($query);
$query = "SELECT * from notifications where `id` = '$id';";
if(count(fetchAll($query))>0){
    foreach(fetchAll($query) as $i){
        echo "";  
    }
}
?><br/>

<a href="../userdashboard.php" style="color:black;font-size:30px;font-type:bold;">BACK</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                  
</head>

<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        
        <div class="tm-section-2">
          
            <div class="container">
                <div class="row">
                    <div class="col text-center">
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
                                $id=$_GET['id'];
                                $sql="select * from notifications where id='$id'";
                                $res=$this->con->query($sql);
                                if($res){
                                    while($row = mysqli_fetch_array($res)){

                                       
                                        echo "<h1>".$row["name"]."</h1>";
                                        echo "<h3>".$row["date1"]."</h3>";
                                        echo "<h2>".$row["event"]."</h2>";
                                        echo "<h2>".$row["location"]."</h2>";
                                        


                                    }
                                }
                            }
                        }
                        $obj=new show;
                        $obj->view();
                        ?>
                    </div>                
                </div>
            </div>        
        </div>
        
        <div class="tm-section tm-position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                <polygon fill="#ee5057" points="0,0  100,0  50,60"></polygon>                   
            </svg> 
            <div class="container tm-pt-5 tm-pb-4">
                <div class="row text-center">
                    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                        <i class="fa tm-fa-6x fa-legal tm-color-primary tm-margin-b-20"></i>
                        <h3 class="tm-color-primary tm-article-title-1">Get News from every upcomong Events and blood donation camps.</h3>
                        <p>Now participate in any blood donation camp, seminars as well as events to donate blood 
                            and to take part in various activities.</p>
                            
                        </article>
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                            <i class="fa fa-fw fa-bell"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Get Notified everytime!!!!..through the notification icon</h3>
                            <p>Now, you dont need to worry about the events and camps. You can be notified through out system experts anywhere and
                                anytime. Dont forget to notice the bel icon....</p>
                                
                            </article>
                            <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                           
                                <i class="fa tm-fa-6x fa-life-saver tm-color-primary tm-margin-b-20"></i>
                                <h3 class="tm-color-primary tm-article-title-1">Get alert about events anytime through alert function...</h3>
                                <p>Alert function helps in alerting the users about the upcoming event..
                                    Alert can be through the mobile sms or even on web notification!!!!</p>
                                    
                                </article>
                                
                            </div>        
                        </div>
                    </div>
                    
                    <footer class="tm-bg-dark-blue">
                        <div class="container">
                            <div class="row">
                                <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                                    
                                    
                                   <a href="https://www.facebook.com/tooplate" class="tm-color-primary tm-font-normal" target="_parent"></a></p>        
                               </div>
                           </div>                
                       </footer>
                   </div>
                   
                   <script src="js/jquery-1.11.3.min.js"></script>            
                   <script src="js/popper.min.js"></script>                           
                   <script src="js/bootstrap.min.js"></script>                 
                   <script src="js/datepicker.min.js"></script>                
                   <script src="js/jquery.singlePageNav.min.js"></script>      
                   <script src="slick/slick.min.js"></script>                         
               </body>
               </html>

