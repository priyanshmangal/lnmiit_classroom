<?php
Include('connection.php');
session_start();
$idd = $_GET['id'];
$sql = "DELETE FROM sem_register WHERE id='$idd'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("Location: sem_register.php");
?>