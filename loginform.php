<?php
include 'dbcon.php';
session_start();

$uname = $_POST['uname'];
$pass = $_POST['password'];

$sqlGetPass = "SELECT * FROM `admin` WHERE `username`='". $uname ."'";

$res = $conn ->query($sqlGetPass);
$data = $res ->fetch_assoc();

$rowCount = $res -> num_rows;

if ($rowCount > 0){
    $passDB = $data['password'];
    $accType = $data['type'];
    if ($pass == $passDB){
        $_SESSION['login'] = true;

        if ($accType == "polima"){
            header('location: new.php');
        }
        if ($accType == "admin"){
            header('location: admin.php');
        }

    }
    else{
        header('location: login.php');

        $_SESSION['error'] = "Please Check Your Password.";
    }
}
else{
    header('location: login.php');
    $_SESSION['error'] = "Please Check Your UserName.";
}
