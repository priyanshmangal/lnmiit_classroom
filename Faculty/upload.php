<?php
//print_r($_FILES);


//print_r($target_file); die;

if(isset($_POST["submit"])) {
	$target_dir = "../uploads/";
	print_r($_FILES);
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}
?>