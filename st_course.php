<?php
Include('connection.php');
session_start();
$User=$_SESSION["user"];
//echo $User;
$s="";
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){
		$s=$s.$selected."," ;
	}
echo $s;
	$sql7 = "Update student set subject='$s' where username='$User'";
	if ($conn->query($sql7) === TRUE) {
		echo "Data Saved";
		header('Location: student.php');
	} else {
		echo "Error: " . $sql7 . "<br>" . $conn->error;
	}
}
}
$Batch;
$sql="select * from student where username='$User'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $Batch=$row['batch'];
     }
} else {
     echo "0 results";
}
$Sem;
$sql1="select * from sem_register where batch='$Batch'";
$result1 = $conn->query($sql1);
if($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {
		 $Sem=$row['sem'];
		 //echo $Sem;
     }
} else {
     echo "0 results";
}
$subcse=array();
$sql2="select * from subject where Semester='$Sem' and dept='CSE'";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {
		 array_push($subcse,$row['name']);
     }
} else {
     echo "0 results";
}

$subece=array();
$sql2="select * from subject where Semester='$Sem'and dept='ECE'";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {
		 array_push($subece,$row['name']);
     }
} else {
     echo "0 results";
}
$subphy=array();
$sql2="select * from subject where Semester='$Sem' and dept='PHYSICS'";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {
		 array_push($subphy,$row['name']);
     }
} else {
     echo "0 results";
}

$submath=array();
$sql2="select * from subject where Semester='$Sem' and dept='MATHEMATICS'";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {
		 array_push($submath,$row['name']);
     }
} else {
     echo "0 results";
}

$subhss=array();
$sql2="select * from subject where Semester='$Sem'and dept='HSS'";
$result2 = $conn->query($sql2);
if($result2->num_rows > 0) {
     // output data of each row
     while($row = $result2->fetch_assoc()) {
		 array_push($subhss,$row['name']);
     }
} else {
     echo "0 results";
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/light-version/layout-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Oct 2016 19:25:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LNMIIT</title>

    <!-- Common plugins -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <link href="plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.css" rel="stylesheet">
    <link href="plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/nano-scroll/nanoscroller.css">
    <link href="plugins/chart-c3/c3.min.css" rel="stylesheet">
    <link href="plugins/iCheck/blue.css" rel="stylesheet">
    <!-- dataTables -->
    <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/toast/jquery.toast.min.css" rel="stylesheet">
    <!--template css-->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.428571429;
}
	</style>
</head>
<body class="layout-horizontal">

<!--top bar start-->
<div class="top-bar bg-primary"><!--by default top bar is dark, add .light-top-bar class to make it light-->
    <div class="container">
        <div class="row">
			<div class="col-xs-2">
				<img src="logo1.png" alt="LNMIT" style="width:120px;height:50px;line-height:60px; margin-top:3%">
			</div>	
            <div class="col-xs-8">
                <!--start search form-->
                <h2 style="line-height: 70px">The LNM Institute of Information Technology </h2>
                <!--end search form-->
            </div>
            <div class="col-xs-2">
                <ul class="list-inline top-right-nav">
                    <li class="dropdown avtar-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/avtar-1.jpg" class="img-circle" width="30" alt="">

                        </a>
                        <ul class="dropdown-menu top-dropdown">
                            <li><a href="javascript: void(0);"><i class="icon-bell"></i> Activities</a></li>
                            <li><a href="javascript: void(0);"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="javascript: void(0);"><i class="icon-settings"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-logout"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- top bar end-->
<!--Main nav start-->
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		
		<div class="col-sm-6 ">
          <ul class="nav navbar-nav">
              <li>
                <a href="student.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-bag"></i><h5>BACK</h5></a>
          </ul>
		  </div>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!--MAin nav end-->
<section class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>Select Course</h3>
            </div>
        </div>
    </div>
	
   <div class="col-sm-6 col-sm-offset-3">
 <div class="panel panel-info" >
	       <div class="panel-heading ">
                    <b><font color="white">
                                Select Course </font> </b>
                        </div>
        <div class="panel-body">
                   
                           <form action="#" method="post">
						   <div class="scrol" style="margin-left:5%">
						   <h4 style='color:red;'>CSE</h4>
						   <?php for($i=0;$i<count($subcse);$i++){ ?>
							<input type="checkbox" name="check_list[]" value="<?php echo $subcse[$i]?>"><label> <?php echo $subcse[$i]?></label><br/>
						   <?php } ?><br>
						   <h4 style='color:red;'>ECE</h4>
						   <?php for($i=0;$i<count($subece);$i++){ ?>
							<input type="checkbox" name="check_list[]" value="<?php echo $subece[$i]?>"><label> <?php echo $subece[$i]?></label><br/>
						   <?php } ?><br>
						   <h4 style='color:red;'>PHYSICS</h4>
						   <?php for($i=0;$i<count($subphy);$i++){ ?>
							<input type="checkbox" name="check_list[]" value="<?php echo $subphy[$i]?>"><label> <?php echo $subphy[$i]?></label><br/>
						   <?php } ?><br>
						   <h4 style='color:red;'>MATHEMATICS</h4>
						   <?php for($i=0;$i<count($submath);$i++){ ?>
							<input type="checkbox" name="check_list[]" value="<?php echo $submath[$i]?>"><label> <?php echo $submath[$i]?></label><br/>
						   <?php } ?><br>
						   <h4 style='color:red;'>HSS</h4>
						   <?php for($i=0;$i<count($subhss);$i++){ ?>
							<input type="checkbox" name="check_list[]" value="<?php echo $subhss[$i]?>"><label> <?php echo $subhss[$i]?></label><br/>
						   <?php } ?>
						   <div>
							<button type="submit" name="submit" style="width: 100%; font-size:1.1em;" class="btn btn-large btn btn-info btn-lg btn-block" ><b>Submit</b></button>
							</div>
							</form>				
  	</div>
							
  	</div>
  	</div>
</section>
<!--Common plugins-->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/pace/pace.min.js"></script>
<script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
<script src="plugins/metisMenu/metisMenu.min.js"></script>
<script src="js/float-custom.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>
