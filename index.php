<?php
include 'dbcon.php';

$getlitter = "SELECT `remain` FROM `tank`";
$resa = $conn -> query($getlitter);
$data = $resa->fetch_row();
$litters = $data[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fuel Station Manager | Wanathawilluwa</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Inscriptional+Pahlavi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Clean-Button-Scale-Hover-Effect.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/FORM.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/select2-select2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<div class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"><span class="text-white d-md-none">Fuel Station Manager</span><button class="btn btn-link navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"><span class="navbar-toggler-icon"></span></button>
        <div id="main-nav" class="navbar-collapse collapse">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <div class="justify-content-center text-center"><a href="index.php"> <button class="btn btn-primary" type="button" style="background: rgb(104,13,253);border-width: 6px;border-radius: 27px;">Home</button></a></div>
                </li>
                <li class="nav-item">
                    <div class="justify-content-center text-center"><a href="polima.php"> <button class="btn btn-primary" type="button" style="background: rgb(104,13,253);border-width: 6px;border-radius: 27px;">පෝලිම</button></a></div>
                </li>
                <li class="nav-item">
                    <div class="justify-content-center text-center"><a href="login.php"> <button class="btn btn-primary" type="button" style="background: rgb(104,13,253);border-width: 6px;border-radius: 27px;">Login</button></a></div>
                </li>
            </ul>
        </div>
    </div>
</div>

<br>
    <div class="justify-content-center text-center">
        <section>
            <div class="container">
                <div class="photo-card" style="background: var(--bs-indigo);">
                    <div class="photo-background" style="background: url(&quot;assets/img/<?php

                    if ($litters > 4950) {
                        echo "full.png";
                    }
                    elseif($litters > 3300){
                        echo "1.png";
                    }
                    elseif ($litters > 1650){
                        echo "half.png";
                    }
                    elseif ($litters > 10){
                        echo "2.png";
                    }
                    else{
                        echo "empty.png";
                    }


                    ?>&quot;) center / contain no-repeat;"></div>
                    <div class="photo-details">
                        <h1>දැනට ඇති තෙල් ලීටර් ප්‍රමාණය</h1><br>
                        <h1><?php echo $litters;?> L</h1>
                    </div>

                </div>

            </div>
        </section>
    </div>
<div class="justify-content-center text-center">
    <h3>Vehicle Counter</h3>
</div>
<div class="justify-content-center text-center">
    <section>
        <div class="container">
            <div class="table-responsive">
                <div class="photo-card" style="background: var(--bs-indigo);">
                    <table class="table" style="color: #3dd5f3">
            <thead>
            <tr>
                <th>Vehicle Type</th>
                <th>Count</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Car</td>
                <td><?php

                    $sqlGetCarCount = "SELECT `vehicleid` FROM `manager` WHERE `type`='car'";
                    $resCar = $conn->query($sqlGetCarCount);
                    $rowCount = $resCar->num_rows;
                    echo $rowCount;
                    ?></td>
            </tr>
            <tr>
                <td>Bike</td>
                <td><?php

                    $sqlGetCarCount = "SELECT `vehicleid` FROM `manager` WHERE `type`='bike'";
                    $resCar = $conn->query($sqlGetCarCount);
                    $rowCount = $resCar->num_rows;
                    echo $rowCount;
                    ?></td>
            </tr>
            <tr>
                <td>3Wheel</td>
                <td><?php

                    $sqlGetCarCount = "SELECT `vehicleid` FROM `manager` WHERE `type`='van'";
                    $resCar = $conn->query($sqlGetCarCount);
                    $rowCount = $resCar->num_rows;
                    echo $rowCount;
                    ?></td>
            </tr>
            <tr>
                <td>Lory</td>
                <td><?php

                    $sqlGetCarCount = "SELECT `vehicleid` FROM `manager` WHERE `type`='lorry'";
                    $resCar = $conn->query($sqlGetCarCount);
                    $rowCount = $resCar->num_rows;
                    echo $rowCount;
                    ?></td>
            </tr>
            <tr>
                <td>Van</td>
                <td><?php

                    $sqlGetCarCount = "SELECT `vehicleid` FROM `manager` WHERE `type`='3wheel'";
                    $resCar = $conn->query($sqlGetCarCount);
                    $rowCount = $resCar->num_rows;
                    echo $rowCount;
                    ?></td>
            </tr>
            </tbody>
        </table>
                </div>
    </div>
        </div>
    </section>
</div>
<footer id="footer">

    <div style= "background: black; text-align: center; margin: 0px; padding:10px">
        <p style= "color:grey; font-family: raleway">Copyright (c) 2022 Pathirana GPSM</p>
    </div>
</footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/select2-1.js"></script>
    <script src="assets/js/select2-2.js"></script>
    <script src="assets/js/select2-3.js"></script>
    <script src="assets/js/select2-4.js"></script>
    <script src="assets/js/select2-5.js"></script>
    <script src="assets/js/select2-6.js"></script>
    <script src="assets/js/select2.js"></script>
</body>

</html>