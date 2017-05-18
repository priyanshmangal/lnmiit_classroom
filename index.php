<?php
Include('connection.php');
session_start(); 
if(isset($_POST['login'])){
	
If($_POST["username"]=='' || $_POST["password"]=='')
{
	$error =  "please fill the empty field.";
}
Else
{
$Username=$_POST["username"];
$Password=$_POST["password"];
$_SESSION["user"] = "$Username"; 
//receiving password field value in $password variable  	
	

$sql = "SELECT * FROM student where username = '$Username'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)> 0){ 
	  while($row = mysqli_fetch_assoc($result)){
		  if($row['password'] == $Password){
			  echo "login successful";
			  $_SESSION["user"] = "$Username";
			  header("Location: student.php");
			  
		  } else{
			  $error= "your username and password do not match";
			  }
	}  
}else{  
$error= "Your username is not found";
} 

 //end of while  
mysqli_close($conn);  
}
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet">
        <link href="plugins/pace/pace.css" rel="stylesheet"><link href="plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="plugins/nano-scroll/nanoscroller.css">
        <link rel="stylesheet" href="plugins/metisMenu/metisMenu.min.css">
        <!--template css-->
        <link href="css/style.css" rel="stylesheet">
		
		<style>
		div {
    background: rgb(100, 100, 100,0.6);
   
}
		</style>

</head>
<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<body class="div" background="lnm2.jpg">
   
    <br>
    <div class="container-fluid">
        <div class=""  style=" align="left">
			<div class="row">
		<div class="col-md-3">
			<img src="logo2.png" alt="LNMIT" style="width:200px;height:100px;">
			</div>
			<div class="col-md-9">
            	<h4><font style="align:center;font-size:36px; color:red"> THe LNM Institute of Information and Technology</font></h4>
               
            </div>
			</div>
            <div class="panel-body"align="center">
					<a href="admin/index.php" class="btn btn-link btn-lg"><h3> <font style="color:black">ADMIN LOGIN </font></h3></a>
					<a href="faculty/index.php" class="btn btn-link btn-lg"> <h3> <font style="color:black">FACULTY LOGIN</font></h3>  </a> 
					<a href="index.php" class="btn btn-link btn-lg"><h3>  <font style="color:black">STUDENT LOGIN </font></h3> </a> 
                 
                <div class="container " style="margin-top: 1%; margin-bottom: 5%;">
   					
                    <div class="panel panel-primary" style="max-width: 45%;" align="left">
                    <?php //echo $_SESSION["msg"];
					if(isset($error)) echo $error ?>
                        <div class="panel-heading form-group">
                            <b><font color="white">
                                STUDENT LOGIN </font> </b>
                        </div>
                   
                        <div class="panel-body" >
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="username">User Name</label> <input
                                    type="text" class="form-control" name="username" id="uname"
                                    placeholder="Enter User Name" required="required">
                                   
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label> <input
                                    type="password" class="form-control" name="password" id="pass"
                                    placeholder="Password" required="required">
                            </div>
							


                            <button type="submit" name="login" value="login" style="width: 100%; font-size:1.1em;" class="btn btn-large btn btn-info btn-lg btn-block"><b>Login</b></button>
                            <br>
							<a href="register.php" class="btn btn-link btn-lg"> REGISTER HERE </a>                      
                        </form>
                    </div>
                   
                </div>
               
            </div>
        </div>
    </div>
   <script src="plugins/jquery/dist/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/pace/pace.min.js"></script><script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="plugins/metisMenu/metisMenu.min.js"></script>
        <script src="js/float-custom.js"></script>

</body>

</body>
</html>
