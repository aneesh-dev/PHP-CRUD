<?php
session_start();
if ($_POST['updateEnquiry']) {
    include('./dbconfig/dbconnect.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    echo $id . ", " . $name . ", " . $email . ", " . $mobile . ", " . $address.", ".$salary;
    $sql="UPDATE enquiry SET name='$name', email='$email', mobile='$mobile', address='$address', salary='$salary' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }
}
$conn->close();
