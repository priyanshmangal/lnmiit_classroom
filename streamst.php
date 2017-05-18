<?php
Include('connection.php');
session_start();
if(isset($_GET['sub'])){
$_SESSION["sub"]=$_GET['sub'];
$subject=$_SESSION["sub"];}
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
              <li>
                <a href="student.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-bag"></i>Home</a>
              </li>
              <li class="active">
                  <a href="streamst.php?sub=<?php echo $subject ?>" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-bag"></i>Stream</a>
              </li>
             
              <li>
                  <a href="javascript: void(0);" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-folder-alt"></i>Batchmates</a>
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
                            New Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#All" data-toggle="tab">All</a>
                                </li>
								<li><a href="#general" data-toggle="tab">General</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Class Schedule</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Assignment</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Document</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
								
                                <div class="tab-pane fade in active" id="All">
                                    <div class="row">
										<div class="col-md-12">
										<br>
											<div class="panel panel-default collapsed">
												<div class="panel-heading">
												  ALL Posts
												</div>
												<div class="panel-body">
													<table id="datatable" class="table table-striped table-hover dt-responsive nowrap">
																	<thead>
																		<tr>
																			<th>Date</th>
																			<th>Message</th>
																			<th>Type</th>
																			<th>Attachment</th>
																		</tr>
																	</thead>

																	<tbody>
																	<?php 
																		Include('connection.php');
																			$sql1 = "SELECT * FROM post where subject='$subject'";
																			$result1 = $conn->query($sql1);
																		if($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) { ?>
																			
																		<tr>
																			<td><?php echo $row['date']; ?></td>
																			<td><a href="ques.php?id=<?php echo $row['id']; ?>"><?php echo substr($row['msg'], 0, 50); ?></a></td>
																			<td><?php echo $row['type'] ; ?></td>
																			<td><?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i><?php } ?></td>	
																		</tr>
																			
																	<?php }} 
																	?>
																		
																	</tbody>
																</table>

												</div>
											</div>
										</div>
									</div><!--end row-->
                                </div>
								<div class="tab-pane fade" id="general">
                                   <div class="row">
										<div class="col-md-12">
										<br>
											<div class="panel panel-default collapsed">
												<div class="panel-heading">
												  General
												</div>
												<div class="panel-body">
													<table id="datatable1" class="table table-striped table-hover dt-responsive nowrap">
																	<thead>
																		<tr>
																			<th>Type</th>
																			<th>Message</th>
																			<th>Attachment</th>
																			<th>Date</th>
																		</tr>
																	</thead>

																	<tbody>
																		<?php 
																		Include('connection.php');
																			$sql1 = "SELECT * FROM post where subject='$subject' and type='General'";
																			
																			$result1 = $conn->query($sql1);
																		if($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) { ?>
																			<a href="ques.php?id=$row['id']">
																		<tr>
																			<td><?php echo $row['date']; ?></td>
																			<td><?php echo substr($row['msg'], 0, 50); ?></td>
																			<td><?php echo $row['type'] ; ?></td>
																			<td><?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i><?php } ?></td>	
																		</tr>
																			</a>
																	<?php }} 
																	?>
																	</tbody>
																</table>

												</div>
											</div>
										</div>
									</div><!--end row-->
								</div>
                                <div class="tab-pane fade" id="profile">
                                   <div class="row">
										<div class="col-md-12">
										<br>
											<div class="panel panel-default collapsed">
												<div class="panel-heading">
												  Assignment
												</div>
												<div class="panel-body">
													<table id="datatable1" class="table table-striped table-hover dt-responsive nowrap">
																	<thead>
																		<tr>
																			<th>Type</th>
																			<th>Message</th>
																			<th>Attachment</th>
																			<th>Date</th>
																		</tr>
																	</thead>

																	<tbody>
																		<?php 
																		Include('connection.php');
																			$sql1 = "SELECT * FROM post where subject='$subject' and type='Class Schedule'";
																			
																			$result1 = $conn->query($sql1);
																		if($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) { ?>
																			<a href="ques.php?id=$row['id']">
																		<tr>
																			<td><?php echo $row['date']; ?></td>
																			<td><?php echo substr($row['msg'], 0, 50); ?></td>
																			<td><?php echo $row['type'] ; ?></td>
																			<td><?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i><?php } ?></td>	
																		</tr>
																			</a>
																	<?php }} 
																	?>
																	</tbody>
																</table>

												</div>
											</div>
										</div>
									</div><!--end row-->
								</div>
                                <div class="tab-pane fade" id="messages">
                                    <div class="row">
										<div class="col-md-12">
										<br>
											<div class="panel panel-default collapsed">
												<div class="panel-heading">
												  Document
												</div>
												<div class="panel-body">
													<table id="datatable1" class="table table-striped table-hover dt-responsive nowrap">
																	<thead>
																		<tr>
																			<th>Type</th>
																			<th>Message</th>
																			<th>Attachment</th>
																			<th>Date</th>
																		</tr>
																	</thead>

																	<tbody>
																		<?php 
																		Include('connection.php');
																			$sql1 = "SELECT * FROM post where subject='$subject' and type='Assignment'";
																			
																			$result1 = $conn->query($sql1);
																		if($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) { ?>
																			<a href="ques.php?id=$row['id']">
																		<tr>
																			<td><?php echo $row['date']; ?></td>
																			<td><?php echo substr($row['msg'], 0, 50); ?></td>
																			<td><?php echo $row['type'] ; ?></td>
																			<td><?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i><?php } ?></td>	
																		</tr>
																			</a>
																	<?php }} 
																	?>
																	</tbody>
																</table>

												</div>
											</div>
										</div>
									</div><!--end row-->
								</div>
                                <div class="tab-pane fade" id="settings">
                                    <div class="row">
										<div class="col-md-12">
										<br>
											<div class="panel panel-default collapsed">
												<div class="panel-heading">
												  Class Schedule
												</div>
												<div class="panel-body">
													<table id="datatable1" class="table table-striped table-hover dt-responsive nowrap">
																	<thead>
																		<tr>
																			<th>Type</th>
																			<th>Message</th>
																			<th>Attachment</th>
																			<th>Date</th>
																		</tr>
																	</thead>

																	<tbody>
																		<?php 
																		Include('connection.php');
																			$sql1 = "SELECT * FROM post where subject='$subject' and type='Document'";
																			
																			$result1 = $conn->query($sql1);
																		if($result1->num_rows > 0) {
																			while($row = $result1->fetch_assoc()) { ?>
																			<a href="ques.php?id=$row['id']">
																		<tr>
																			<td><?php echo $row['date']; ?></td>
																			<td><?php echo substr($row['msg'], 0, 50); ?></td>
																			<td><?php echo $row['type'] ; ?></td>
																			<td><?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i><?php } ?></td>	
																		</tr>
																			</a>
																	<?php }} 
																	?>
																	</tbody>
																</table>

												</div>
											</div>
										</div>
									</div><!--end row-->
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
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- Datatables-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script>
		
		        <script>
            $(document).ready(function () {
                $('#datatable1').dataTable();
            });
        </script>

</body>
</html>
