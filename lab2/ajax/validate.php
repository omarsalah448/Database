<?php
session_start();
include('../connect.php');
if (!$_SESSION['errors']){
    // to prevent sql injections
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_orig = $_POST['password'];
    $password = md5($_POST['password']);
    $retypePassword = $_POST['retype_password'];
    $sql = "INSERT INTO user(first_name, last_name, email, password) VALUES('$fname', '$lname', '$email', '$password')";
    if (mysqli_query($conn, $sql)){
        $_SESSION['name']=$fname;
        $_SESSION['loggedIn'] = true;
        header('Location: ../profile.php');
    }
}
else{
    header('Location: ../signup.php');
}
?>
