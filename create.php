<?php
session_start();

if ($_POST['enquiry']) {
    include('./dbconfig/dbconnect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    echo $name . ", " . $email . ", " . $mobile . ", " . $address.", ".$salary;

    $sql = "INSERT INTO enquiry(name, email, mobile, address, salary) VALUES ('$name','$email','$mobile','$address','$salary')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New employee added successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }
}
$conn->close();
