<?php
session_start();
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!empty($email) && !empty($password) && is_numeric($num)) {
        $query = "INSERT INTO form (fname, lname, gender, cnum, adress, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$num', '$address', '$email', '$password')";
        mysqli_query($con, $query);header("Location: login.php");
    } else {
        echo "<script type='text/javascript'> alert('Please Enter valid information')</script>";
    }
}
?>
