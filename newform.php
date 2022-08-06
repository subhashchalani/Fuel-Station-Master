<?php
include 'dbcon.php';
session_start();

$vehicleID = $_POST['vehicleid'];

$type = $_POST['type'];

$sqlCheckAvailability = "SELECT `vehicleid` FROM `polima` WHERE `vehicleid`='" . $vehicleID ."'";

$res = $conn ->query($sqlCheckAvailability);

$rowCount = $res -> num_rows;

if ($rowCount > 0){
    $_SESSION['error'] = "Oh-hh... Duplicate Vehicle.";
    header('location: new.php');
}
else{
    $sqlInsertData = "INSERT INTO `polima`(`vehicleid`, `type`) VALUES ('". $vehicleID ."','". $type ."')";
    $conn ->query($sqlInsertData);
    $conn->close();
    tank($type);

    $_SESSION['success'] = "Success.";
    header('location: new.php');
}

function tank($type){

    include 'dbcon.php';

    $getlitter = "SELECT `remain` FROM `tankremain`";
    $resa = $conn -> query($getlitter);
    $data = $resa->fetch_row();
    $litters = $data[0];
    if ($litters > 100){
        $getlittermin = "SELECT `litter` FROM `litter` WHERE `type`='". $type ."'";
        $resa1 = $conn -> query($getlittermin);
        $data1 = $resa1->fetch_row();
        $litter1 = $data1[0];
        $neLitter = $litters - $litter1;

        $sqlinsertdata = "UPDATE `tankremain` SET `remain`='". $neLitter ."'";
        $conn->query($sqlinsertdata);
        $conn->close();
    }
    else{
        $_SESSION['error'] = "Success නමුත් තෙල් ඉවරයි.";
    }

}