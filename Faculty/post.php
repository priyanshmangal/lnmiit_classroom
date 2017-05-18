<?php
Include('connection.php');
session_start();
Include('upload.php');
if(isset($_POST['submit'])){
	$subject=$_SESSION["sub"];
	$faculty=$_SESSION["name"];
	$type=$_POST["type"];
	$msg=$_POST["msg"];
	$doc=$target_file;
	//receiving password field value in $password variable  	
	$sql = "Insert into post(subject,faculty,type,msg,doc) values('$subject','$faculty','$type','$msg','$doc')";
	if ($conn->query($sql) === TRUE) {
		echo "Data Saved";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: stream.php?sub=$subject");
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
        <link rel="stylesheet" href="plugins/metisMenu/metisMenu.min.css">
        <!--wysihtml5-->
        <link href="plugins/wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
        <link href="plugins/summernote/summernote.css" rel="stylesheet">
        <link href="plugins/summernote/summernote-bs3.css" rel="stylesheet">

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
                  <a href="stream.php?sub=<?php echo $_SESSION["sub"]; ?>" role="button" aria-haspopup="true" aria-expanded="false"><i
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
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <b><h4>NEW POST</h4></b>
            </div>
        </div>
    </div>
			
            <div class="row">
                <div class="col-sm-12">
					<form action="#" method="POST" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="form-group">
                                  <label class="col-md-1 control-label">Type</label>
								  <div class="col-lg-2">
									<select name="type" class="ui fluid dropdown form-control" required>
									  <option value="General">General Post</option>
									  <option value="Class Schedule">Class Schedule</option>
									  <option value="Assignment">Assignment</option>
									  <option value="Document">Document</option>
									  <option value="Marks">Marks</option>
									  <option value="Homework">Homework</option>
								</select>
								</div>
								</div>
							<legend></legend>
                        </div>
                        <div class="panel-body">  
								<textarea class="form-control" name="msg" id="textarea" rows="8" required="required"></textarea>
								<br>
								<legend></legend>
								<div class="col-sm-5 col-md-offset-1 ">
								<div class="fileupload btn btn-success btn-rounded btn-icon">
                                    <i class="fa fa-cloud-upload"></i>   <span>Upload</span>
                                    <input type="file" name="fileToUpload" class="upload">
                                </div>
								</div>
								<div class="col-sm-2 col-md-offset-4 ">
								<button type="submit" name="submit"  class="btn btn-md btn-info" ><b>POST</b></button>   
								</div>
                        </div>
                    </div>
					</form>
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
        <!--editor wysihtml5 and summernote-->
        <script src="plugins/wysihtml5/wysihtml5-0.3.0.js"></script>
        <script src="plugins/wysihtml5/bootstrap-wysihtml5.js"></script>
        <script src="plugins/summernote/summernote.min.js"></script>
              <script>
            $(document).ready(function () {
                //wysihtml5
                $('#textarea').wysihtml5({});

                //summernote
                $(function () {

                    // Initialize summernote plugin
                    $('.summernote').summernote();

                    var sHTML = $('.summernote').code();

                    console.log(sHTML);


                });

            });
        </script>


</body>
</html>
