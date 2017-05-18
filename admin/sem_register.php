<?php
Include('connection.php');

if(isset($_POST['submit'])){
	
	$Batch=$_POST["batch"];
	$Sem=$_POST["sem"];
	//receiving password field value in $password variable  	
	$sql = "Insert into sem_register (batch,sem) values('$Batch','$Sem')";
	if ($conn->query($sql) === TRUE) {
		echo "Data Saved";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$batch=array();
$sem=array();
$semid=array();
$sql2="Select * From sem_register order by batch";
$result2 = $conn->query($sql2);
	if($result2->num_rows > 0) {
     while($row = $result2->fetch_assoc()) {
		 array_push($semid,$row['id']);
		 array_push($batch,$row['batch']);
		// echo $row['subject'];
		  array_push($sem,$row['sem']);
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
                  <a href="faculty_register.php" role="button" aria-haspopup="true" aria-expanded="false"><i
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
                <h3>Assign Semester</h3>
            </div>
        </div>
    </div>
	<div class="container-fluid">
   
               <div class=" col-sm-5" style="margin-top:2%">
                    <div class="panel panel-indigo">
                        <div class="panel-heading">
							Semester Register
                        </div>
						<div class="panel-body" >
                       <form action="#" method="post" >
                            <div class="form-group col-sm-5">
                            	
                                <label ><b>Batch</b></label><br>
                                <select name="batch" class="ui fluid dropdown" required>
								  <option value="y16">Y16</option>
								  <option value="y15">Y15</option>
								  <option value="y14">Y14</option>
								  <option value="y13">Y13</option>                                  
								</select>
		       
                            </div>
                            <div class="form-group col-sm-2"></div>
                            <div class="form-group col-sm-5">
                                <label><b>Semester</b></label><br>
                                <select name="sem"  class="ui fluid dropdown" required>
								<option value= "sem1">Sem-1</option>
								<option value= "sem2">Sem-2</option>
								<option value= "sem3">Sem-3</option>
								<option value= "sem4">Sem-4</option>
								<option value= "sem5">Sem-5</option>
								<option value= "sem6">Sem-6</option>
								<option value= "sem7">Sem-7</option>
								<option value= "sem8">sem-8</option>
								</select>
                            </div>
                           
                            <button type="submit" name="submit" style="width: 100%; font-size:1.1em;" class="btn btn-large btn btn-info btn-lg btn-block" ><b>Submit</b></button>
                                                  
                        </form>
					</div>			
				</div>               
	</div>
		<div class="col-md-4 col-md-offset-2" align="right">
						  <table class="table table-striped">
							<thead>
							  <tr>
								<th>Batch</th>
								<th>Semester</th>
								<th> </th>
							  </tr>
							</thead>
							<tbody>
							<?php for($i=0;$i<count($batch);$i++){?>
							  <tr>
								<td><?php echo $batch[$i]?></td>
								<td><?php echo $sem[$i]?></td>
								<td><a href="rm_sem.php?id=<?php echo $semid[$i]?>" class="btn btn-circle btn-sm btn-warning" ><i class="fa fa-times"></i><!--<img src="images/yc.jpg" class="img-circle" width="30" alt="">-->
                            </a></td>
								
							  </tr>
							<?php } ?> 
							</tbody>
						  </table>			
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
