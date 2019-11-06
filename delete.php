<?php
session_start();
if(isset($_GET['id'])){
    include('./dbconfig/dbconnect.php');
    $id=$_GET['id'];

    $sql="DELETE FROM enquiry WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }
}
$conn->close();
