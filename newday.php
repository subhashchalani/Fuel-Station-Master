<?php
include 'dbcon.php';

//     Car

$sqlResetCar = "DELETE FROM `manager` WHERE `type`='car'";
$conn->query($sqlResetCar);

$sqlResetCarPolima = "DELETE FROM `polima` WHERE `type`='car'";
$conn->query($sqlResetCarPolima);

//     Bike

$sqlResetBike = "DELETE FROM `manager` WHERE `type`='bike'";
$conn->query($sqlResetBike);

$sqlResetBikePolima = "DELETE FROM `polima` WHERE `type`='bike'";
$conn->query($sqlResetBikePolima);

//     3Wheel

$sqlReset3wheel = "DELETE FROM `manager` WHERE `type`='3wheel'";
$conn->query($sqlReset3wheel);

$sqlReset3WheelPolima = "DELETE FROM `polima` WHERE `type`='3wheel'";
$conn->query($sqlReset3WheelPolima);

//     Lory

$sqlResetLorry = "DELETE FROM `manager` WHERE `type`='lorry'";
$conn->query($sqlResetLorry);

$sqlResetLorryPolima = "DELETE FROM `polima` WHERE `type`='lorry'";
$conn->query($sqlResetLorryPolima);

//     Van

$sqlResetVan = "DELETE FROM `manager` WHERE `type`='van'";
$conn->query($sqlResetVan);

$sqlResetVanPolima = "DELETE FROM `polima` WHERE `type`='van'";
$conn->query($sqlResetVanPolima);


// Reset Fuel Capacity

$sqlResetStock = "UPDATE `tank` SET `remain`=6000";
$conn->query($sqlResetStock);

$sqlResetStockPolima = "UPDATE `tankremain` SET `remain`=6000";
$conn->query($sqlResetStockPolima);

header('location: index.php');