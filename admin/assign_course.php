<?php
Include('connection.php');
session_start();
if(isset($_POST['register'])){
	
	$Course=$_POST["course"];
	$Faculty=$_POST["faculty"];
	$Dept=$_GET['id'];
	//receiving password field value in $password variable  	
	$sql = "Insert into course_register (subject, faculty, dept) values('$Course','$Faculty','$Dept')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$idd = $_GET['id'];
$_SESSION["dep"] = $idd;
//print_r($_SESSION["dep"]);
	//$idd='CSE';
$sql = "SELECT * FROM login where Department='$idd'";
$sql1 = "SELECT * FROM subject where dept='$idd'";
$sub= array();
$name=array();
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {
		 array_push($sub,$row['name']);
         //echo "<br> name: ". $row["name"]."<br>";
     }
} else {
     echo "0 results";
}
if($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 array_push($name,$row['name']);
         //echo "<br> name: ". $row["name"]."<br>";
     }
} else {
     echo "0 results";
}
$course=array();
$faculty=array();
$regid=array();
$sql2="Select * From course_register where dept='$idd' order by subject";
$result2 = $conn->query($sql2);
	if($result2->num_rows > 0) {
     while($row = $result2->fetch_assoc()) {
		 array_push($regid,$row['id']);
		 array_push($course,$row['subject']);
		// echo $row['subject'];
		  array_push($faculty,$row['faculty']);
         //echo "<br> name: ". $row["name"]."<br>";
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
				<img src="logo1.png" alt="LNMIT" style="width:120px;height:50px; line-height: 70px; margin-top:3%">
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
		
		<div class="col-sm-6 col-sm-offset-6">
          <ul class="nav navbar-nav">
              <li>
                <a href="home.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-bag"></i>Home</a>
              </li>
              <li>
                  <a href="course-register.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-bag"></i>Course Register</a>
              </li>
              <li class="active">
                  <a href="sem_register.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-envelope"></i>Semester Register</a>
              </li>
              <li>
                  <a href="update-user.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-folder-alt"></i>Faculty Register</a>
              </li>
          </ul>
		  </div>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!--MAin nav end-->
<section class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>ASSIGN COURSE</h3>
            </div>
        </div>
    </div>
<div class="container-fluid">
   
               <div class=" col-md-6"  align="left" style="margin-top:2%;" >
                       
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            
							<legend>ASSIGN COURSE</legend>
                        </div>
              
                        <div class="panel-body" >
							

                        <form action="#" method="post" >
                            <div class="form-group col-sm-5">
                            	
                                <label >Select Course</label><br>
                                <select name="course" class="ui fluid dropdown" required>
								<?php for($i=0;$i<count($sub);$i++){?>
								  <option value="<?php echo $sub[$i];?>"><?php echo $sub[$i];?></option>
                                  <?php  } ?>                                
								</select>
								
                                   
                            </div>
                            <div class="form-group col-sm-2"></div>
                            <div class="form-group col-sm-5">
                                <label>Faculty</label><br>
                                <select name="faculty"  class="ui fluid dropdown" required>
								<?php 
								for($i=0;$i<count($name);$i++){ ?>
								<option value= "<?php echo $name[$i]?>"><?php echo $name[$i]?></option>
								<?php } ?>
								</select>
                            </div>
                           <br>
						   <br>
						   <legend></legend>

						   <div class="col-sm-4">
                            <button type="submit" name="register"  class="btn btn-md btn-primary" style="width: 100%" ><b>Submit</b></button>
                            </div>                   
                        </form>
                        </div>
                    </div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4 col-md-offset-1" align="right">
						  <table class="table table-striped">
							<thead>
							  <tr>
								<th>Subject</th>
								<th>Faculty</th>
								<th> </th>
							  </tr>
							</thead>
							<tbody>
							<?php for($i=0;$i<count($course);$i++){?>
							  <tr>
								<td><?php echo $course[$i]?></td>
								<td><?php echo $faculty[$i]?></td>
								<td><a href="rm_course.php?id=<?php echo $regid[$i]?>" class="btn btn-circle btn-sm btn-warning" ><i class="fa fa-times"></i><!--<img src="images/yc.jpg" class="img-circle" width="30" alt="">-->
                            </a></td>
								
							  </tr>
							<?php } ?> 
							</tbody>
						  </table>			
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
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });
    });
</script>
</body>
</html>
