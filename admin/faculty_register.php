
<?php
Include('connection.php');
session_start();
if(isset($_POST['submit'])){
	
	$Name=$_POST["name"];
	$Email=$_POST["email"];
	$User=$_POST["username"];
	$Password=$_POST["password"];
	$Dept=$_POST["dept"];
	
	//receiving password field value in $password variable  	
	$sql = "Insert into login(username,name,email,password,Department) values('$User','$Name','$Email','$Password','$Dept')";
	if ($conn->query($sql) === TRUE) {
		
		echo "Register Successfully";
		//header("Location: home.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
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
              <li >
                  <a href="sem_register.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-envelope"></i>Semester Register</a>
              </li>
              <li class="active">
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
                <h3>REGISTER NEW FACULTY</h3>
            </div>
        </div>
    </div>
	<div class="container-fluid">

               <div class=" col-sm-6 col-sm-offset-3" >
                   
                    <div class="panel panel-indigo">

                        <div class="panel-heading form-group">
                            <b><font color="white">
                                REGISTER </font> </b>
                        </div>

                        <div class="panel-body" >
                    
						
                            <form class="form-horizontal" action="#" method="post">

                                <div class="form-group">
                                    <label class="col-lg-4 control-label"> Enter Full Name</label>
                                    <div class="col-lg-8">
                                        <input type="name" placeholder="Full Name" name="name" class="form-control" required>
                                    </div>
                                </div>
							  <div class="form-group">
                                    <label class="col-lg-4 control-label">Email</label>
                                    <div class="col-lg-8">
                                        <input type="email" placeholder="Email" name="email" class="form-control" required>
                                    </div>
                              </div>
							   <div class="form-group">
                                    <label class="col-lg-4 control-label">UserName</label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="UserName" name="username" class="form-control" required>
                                    </div>
                              </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Password</label>
                                    <div class="col-lg-8">
                                        <input type="password" placeholder="Password" name="password" class="form-control" required>
                                    </div>
                                </div>
								<div class="form-group">
                                  <label class="col-lg-4 control-label">Department</label>
								  <div class="col-lg-8">
									<select name="dept" class="ui fluid dropdown form-control" required>
									  <option value="CSE">CSE</option>
									  <option value="ECE">ECE</option>
									  <option value="MATHEMATICS">MATHEMATICS</option>
									  <option value="PHYSICS">PHYSICS</option>
									  <option value="HSS">HSS</option>
								</select>
								</div>
								</div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-9">
                                        <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      <!--   <div class="row">
                            
                               <b> <label >Full Name</label> </b><input
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Full Name" required="required" required pattern="[a-zA-Z\s]+">

                            

                            
                                <b> <label>Email ID</label> </b> <input
                                    type="email" class="form-control" name="email" id="email"
                         	        placeholder="Email Id" required="required" data-validation="email" data-validation-error-msg="You did not enter a valid e-mail">
                       		
                        <div class="row">

                            
                              <b>  <label>User Number</label> </b><input
                                    type="text" class="form-control" name="roll" id="roll_no"
                                    placeholder="User Name" required="required">
                               <b> <label>Password</label> </b><input
                                    type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" required="required">

                            
                           </div>

                            
                                <label>Department</label><br>
                                <select name="dept" class="ui fluid dropdown" required>
								  <option value="CSE">CSE</option>
								  <option value="ECE">ECE</option>
								  <option value="MATHEMATICS">MATHEMATICS</option>
								  <option value="PHYSICS">PHYSICS</option>
								  <option value="HSS">HSS</option>
								</select>
                         	
                         </div> -->


				</div> 

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
