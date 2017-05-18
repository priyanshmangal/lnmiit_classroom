<?php
Include('connection.php');
session_start();
if(isset($_GET['id'])){
$id=$_GET['id'];
$_SESSION["ques_id"]=$_GET['id'];
}

if(isset($_POST['submit'])){
	$ques_id=$_SESSION["ques_id"];
	$student=$_SESSION["name"];
	$msg=$_POST['msg']; 	
	$sql = "Insert into comments (ques_id,student,msg) values('$ques_id','$student','$msg')";
	if ($conn->query($sql) === TRUE) {
		$_SESSION["msg"] ="Register Successfully";
		echo "Register Successfully";
		header("Location: ques.php");
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
                <a href="fhome.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-bag"></i>Home</a>
              </li>
              <li>
                  <a href="stream.php?sub=<?php echo $_SESSION['sub']; ?>" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-bag"></i>Stream</a>
              </li>
              <li class="active">
                  <a href="post.php" role="button" aria-haspopup="true" aria-expanded="false"><i
                          class="icon-envelope"></i>Create Post</a>
              </li>
              <li>
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
					<?php 
						$ques_id=$_SESSION["ques_id"];
						$sql1 = "SELECT * FROM post where id='$ques_id'";
						$result1 = $conn->query($sql1);
						while($row = $result1->fetch_assoc()) { 
						?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<div class="row">
								<div class="col-sm-1">
									 <img src="images/avtar-11.jpg" class="img-circle" width="40" alt="">
								</div>
								<div class="col-sm-6">
									<h4><?php echo $row['faculty']; ?></h4>
									<?php echo $row['date']; ?>
								</div>
							</div>				
							<legend></legend>
                        </div>
                        <!-- /.panel-heading -->
							<div class="panel-body">
								<?php echo $row['msg']; ?>
							</div>
							<div class="panel-footer">
								<?php if($row['doc']!=="../uploads/"){?><i class="fa fa-paperclip" style="font-size:24px;color:red"></i> 
								<a href="<?php echo $row['doc']; ?>" download class="btn btn-primary btn-rounded btn-icon"><i class="fa fa-cloud-download"></i> Download</a>
								<?php }} ?>
							</div>
						</div>
						<!-- --------------------------------------------     -->
						 <div class="panel panel-default">
                        <div class="panel-heading">
							Class Comments			
							
                        </div>
                        <!-- /.panel-heading -->
							<legend></legend>
							<div class="scrollDiv">
							<div class="panel-body">
							
								
							<?php 
								$sql1 = "SELECT * FROM comments where ques_id='$ques_id'";
								$result1 = $conn->query($sql1);
								while($row = $result1->fetch_assoc()) { 
								?>
								<div class="row">
									<div class="col-sm-1">
										 <img src="images/avtar-11.jpg" class="img-circle" width="30" alt="">
									</div>
									<div class="col-sm-8">
										<b><?php echo $row['student']; ?></b> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['date']; ?> <br>
										<?php echo $row['msg']; ?>
									</div>
								</div>	
								<br>
								<?php } ?>
								</div>
							</div>
							<div class="panel-footer">
								
								<form action="#" method="POST">
								<div class="row">
									<div class="col-sm-1">
										 <img src="images/avtar-11.jpg" class="img-circle" width="30" alt="">
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="msg" id="textarea" rows="1"  placeholder="Add Class Comment" required="required"></textarea>
									</div>
									<div class="col-sm-2">
										<button type="submit" name="submit"  class="btn btn-md btn-info" ><b>POST</b></button>
									</div>
									</div>
								</form>
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
