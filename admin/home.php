<?php
Include('connection.php');

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
    <link href="plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.css" rel="stylesheet">
    <link href="plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/nano-scroll/nanoscroller.css">
    <link href="plugins/chart-c3/c3.min.css" rel="stylesheet">
	 <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="plugins/iCheck/blue.css" rel="stylesheet">
        <link rel="stylesheet" href="plugins/metisMenu/metisMenu.min.css">
        <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
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
              <li class="active">
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

        <div class="row">
            <div class="col-md-3">
                <div class="widget padding-0 white-bg">
                    <div class="bg-primary" style="height: 120px"></div>
                    <div class="thumb-over">
                        <img src="images/avtar-1.jpg" alt="" width="100" class="img-circle">
                    </div>
                    <div class="padding-20 text-center">
                        <p class="lead font-500 margin-b-0"><?php// print_r($_SESSION['name']); ?></p>
                        <p class="text-muted">Admin</p>
                        <p class="text-sm margin-b-0">A positive attitude from you tends to produce a positive attitude toward you. </p>
                        <hr>
                        <ul class="list-unstyled margin-b-0 text-center row">
                            <li class="col-xs-4">
                                <span
                                    class="font-600">30</span>
                                <p class="text-muted text-sm margin-b-0">No. of Faculty</p>
                            </li>
                            <li class="col-xs-4">
                                <span
                                    class="font-600">25</span>
                                <p class="text-muted text-sm margin-b-0">No. of Courses</p>
                            </li>
                            <li class="col-xs-4">
                                <span
                                    class="font-600">600</span>
                                <p class="text-muted text-sm margin-b-0">No. of Students</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                 <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">FACULTY</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">COURSES</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Messages</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
								<br>
                                    <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
							
                                <div class="panel-heading">
                                    Faculty
                                </div>
                                <div class="panel-body">
                                    
                                    <div id="accordion">
                                        <h3>CSE</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM login where Department='CSE'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                        <h3>ECE</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM login where Department='ECE'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                        <h3>Mathematics</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM login where Department='MATHEMATICS'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                           
                                        </div>
                                        <h3>Physics</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM login where Department='PHYSICS'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
										<h3>HSS</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM login where Department='HSS'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                    </div>
                                </div>
                            </div>
								</div>
								</div>
                                <div class="tab-pane fade" id="profile">
                                    <br>
                                    <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
							
                                <div class="panel-heading">
                                    COURSES
                                </div>
                                <div class="panel-body">
                                    
                                    <div id="accordion-hover">
                                        <h3>SEMESTER-1</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem1'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                        <h3>SEMESTER-2</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem2'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                        <h3>SEMESTER-3</h3>
                                        <div>
                                            <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem3'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                           
                                        </div>
                                        <h3>SEMESTER-4</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem4'";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
										<h3>SEMESTER-5</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem5";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
										<h3>SEMESTER-6</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem6";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
										<h3>SEMESTER-7</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem7";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
										<h3>SEMESTER-8</h3>
                                        <div>
                                           <?php 
												Include('connection.php');
												$sql1 = "SELECT * FROM subject where Semester='sem8";
												$result1 = $conn->query($sql1);
												if($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) { ?>
													
												<ul>
													<li><?php echo $row['name']; ?></li>
																			
												</ul>
																			
												<?php }} 
												?>
                                        </div>
                                    </div>
                                </div>
                            </div>
								</div>
								</div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
        <!--page script-->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/jquery.ui.custom.js"></script>

</body>
</html>
