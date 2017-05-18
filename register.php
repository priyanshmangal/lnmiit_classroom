
<?php
Include('connection.php');
session_start();
if(isset($_POST['submit'])){
	
	$Name=$_POST["name"];
	$Email=$_POST["email"];
	$Mobile=$_POST["mobile"];
	$Roll_no=$_POST["roll"];
	$Branch =$_POST["branch"];
	$Batch = $_POST["batch"];
	$User=$_POST["uname"];
	$Password=$_POST["pswd"];
	//receiving password field value in $password variable  	
	$sql = "Insert into student (name,email,mobile,roll_no,batch,branch,username,password) values('$Name','$Email','$Mobile','$Roll_no','$Batch','$Branch','$User','$Password')";
	if ($conn->query($sql) === TRUE) {
		$_SESSION["msg"] ="Register Successfully";
		echo "Register Successfully";
		header("Location: http://localhost/MMS/index.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>





<!DOCTYPE html>
<html>
<head>
<title>Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
    <div class="container-fluid">
        <div class="panel panel-success">
            <div class="panel-heading" align="center">
            	<h4><font style="font-family: fantasy;font-size:28px; color:#FF3333"> The LNM Institute of Information Technology.</font></h4>
                <h4><font color="black" style="font-family: fantasy;font-size:20px"> Register Here</font></h4>
            </div>
            <div class="panel-body"align="center" style="backgroud-color:#eca6d6">
                 
                <div class="container " style="margin-top: 5%; margin-bottom: 5%;">
   
                    <div class="panel panel-primary" style="max-width: 65%;" align="left" style="backgroud-color:E391D7">
                       
                        <div class="panel-heading form-group">
                            <b><font color="white">
                                REGISTER </font> </b>
                        </div>
                   
                        <div class="panel-body" >
                        <form action="register.php" method="post" >
                         <div class="row">
                            <div class="form-group col-md-5">
                                <label >Full Name</label> <input
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Full Name" required="required" required pattern="[a-zA-Z\s]+">
                                   
                            </div>
                          
                            <div class="form-group col-md-5">
                                <label>Email ID</label> <input
                                    type="email" class="form-control" name="email" id="email"
                         	        placeholder="Email Id" required="required" data-validation="email" data-validation-error-msg="You did not enter a valid e-mail">
                       		</div>
                         </div>   
                         <div class="row">
                            <div class="form-group col-md-5">
                                <label>Mobile Number</label> <input
                                    type="number" class="form-control" name="mobile" id="mobile"
                                    placeholder="Mobile Number" required="required" data-validation="number" data-validation-length="max12">
                            </div>
                            <div class="form-group col-md-5">
                                <label>Roll Number</label> <input
                                    type="text" class="form-control" name="roll" id="roll_no"
                                    placeholder="Roll Number" required="required">
                                   
                            </div>
                           </div> 
						   
						   <div class="row">
                            <div class="form-group col-md-5">
                                <label ><b>Batch</b></label>
                                <select name="batch" class="ui fluid dropdown" required>
								  <option value="y13">Y13</option>
								  <option value="y14">Y14</option>
								  <option value="y15">Y15</option>
								  <option value="y16">Y16</option>                                  
								</select>
                                   
                            </div>
                            <div class="form-group col-md-5">
                                <label ><b>Branch</b></label>
                                <select name="branch" class="ui fluid dropdown" required>
								  <option value="CSE">CSE</option>
								  <option value="CCE">CCE</option>
								  <option value="ECE">ECE</option>
								  <option value="MME">MME</option>  
								  <option value="ME">ME</option> 
								</select>
                            </div>
                            </div>
							
                            <div class="row">
                            <div class="form-group col-md-5">
                                	<label for="username">User Name</label> <input
                                    type="text" class="form-control" name="uname" id="uname"
                                    placeholder="Enter User Name" required="required">
                                   
                            </div>
                            <div class="form-group col-md-5">
                                <label for="password">Password</label> <input
                                    type="password" class="form-control" name="pswd" id="password"
                                    placeholder="Password" required="required">
                            </div>
                            </div>
                            <button type="submit" name="submit"style="width: 100%; font-size:1.1em;" class="btn btn-large btn btn-info btn-lg btn-block" ><b>Register</b></button>
                                                  
                        </form><br>
						<label for="register">Already registered!! <a href="index.php">Login Here</a></label>
                        </div>
                    </div>
                   
                </div>
               
            </div>
            <div class="panel-footer" align="center"><font style="color: #151">Copyright @2016  <a href="https://www.hclinfosystems.in/">hcl.com</a>, All Rights Reserved. </font></div>
        </div>
    </div>
	</body>
</html>