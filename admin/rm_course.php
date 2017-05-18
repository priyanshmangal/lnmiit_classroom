<?php
Include('connection.php');
session_start();
$idd = $_GET['id'];
$sql = "DELETE FROM course_register WHERE id='$idd'";
$dep=$_SESSION["dep"];
echo $dep;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("Location: assign_course.php?id=$dep");
?>