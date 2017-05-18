<?php
Include('connection.php');
session_start();
if(isset($_GET['sub'])){
$_SESSION["sub"]=$_GET['sub'];}
$sql1 = "SELECT * FROM post";
$course=array();
$result1 = $conn->query($sql1);

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
                            <img src="images/avtar-11.jpg" class="img-circle" width="30" alt="">

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
              <li >
                <a href="fhome.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-bag"></i>Home</a>
              </li>
              <li>
                  <a href="stream.php?sub=<?php echo $_SESSION["sub"]; ?>" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-bag"></i>Stream</a>
              </li>
              <li >
                  <a href="post.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-envelope"></i>Create Post</a>
              </li>
              <li class="active">
                  <a href="studentlist.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-folder-alt"></i>Student List</a>
              </li>
          </ul>
		  </div>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!--MAin nav end-->
<section class="container">

        <div class="row">
                 <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student List
							<legend></legend>
                        </div>
                        <!-- /.panel-heading -->
                        
							<div class="panel-body">
								<div class="scrollDiv">
									<table id="datatable" class="table table-striped table-bordered table-hover dt-responsive nowrap">
										<thead>
											<tr>
												<th>Roll No.</th>
												<th>Name</th>
												<th>Email</th>
											</tr>
										</thead>

										<tbody>
											<?php 
												Include('connection.php');
													$sql1 = "SELECT * FROM student";
													$result1 = $conn->query($sql1);
													if($result1->num_rows > 0) {
													while($row = $result1->fetch_assoc()) { 
														$str=$row["subject"];
														$arr=explode(",",$str);
														for($i=0; $i<count($arr)-1;$i++){
															if($arr[$i]==$_SESSION["sub"]){
											?>
													<a href="#">
													<tr>
													<td><?php echo $row['roll_no']; ?></td>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['email'] ; ?></td>
													</tr>
													</a>
											<?php }}}} 
												?>
																		
										</tbody>
									</table>

								</div>
							</div>
						</div>
					</div><!--end row-->
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
<!-- Datatables-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script>
	

</body>
</html>
