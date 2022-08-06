<?php
include 'dbcon.php';
session_start();

$vehicleID = $_POST['vehicleid'];

$type = $_POST['type'];

$sqlCheckAvailability = "SELECT `vehicleid` FROM `manager` WHERE `vehicleid`='" . $vehicleID ."'";

$res = $conn ->query($sqlCheckAvailability);

$rowCount = $res -> num_rows;

if ($rowCount > 0){
    $_SESSION['error'] = "මේ වාහනයට දැනටමත් ඉන්ධන ලැබී ඇත.";
    header('location: admin.php');
}
else{
    $sqlInsertData = "INSERT INTO `manager`(`vehicleid`, `type`) VALUES ('". $vehicleID ."','". $type ."')";
    $conn ->query($sqlInsertData);
    $conn->close();
    tank($type);

    $_SESSION['success'] = "Success.";
    header('location: admin.php');
}

function tank($type){

    include 'dbcon.php';

    $getlitter = "SELECT `remain` FROM `tank`";
    $resa = $conn -> query($getlitter);
    $data = $resa->fetch_row();
    $litters = $data[0];
    if ($litters > 100){
        $getlittermin = "SELECT `litter` FROM `litter` WHERE `type`='". $type ."'";
        $resa1 = $conn -> query($getlittermin);
        $data1 = $resa1->fetch_row();
        $litter1 = $data1[0];
        $neLitter = $litters - $litter1;

        $sqlinsertdata = "UPDATE `tank` SET `remain`='". $neLitter ."'";
        $conn->query($sqlinsertdata);
        $conn->close();
    }
    else{
        $_SESSION['error'] = "Success නමුත් තෙල් ඉවරයි.";
    }

}