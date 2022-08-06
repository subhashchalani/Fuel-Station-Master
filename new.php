<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: login.php');
}
if (isset($_SESSION['error'])) {
    $msg =  $_SESSION['error'];
    echo '<h5 style="color: red; text-align: center;">' . $msg .'</h5>';
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    $msg =  $_SESSION['success'];
    echo '<h5 style="color: green; text-align: center;">' . $msg .'</h5>';
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="assets/css/FORM.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
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
            </ul>
        </div>
    </div>
</div>
    <div class="justify-content-center text-center"></div>
    <div class="justify-content-center text-center">
        <h1>පෝලිම Vehicle Add</h1>
        <div class="container">
            <div>
                <form method="post" action="newform.php">
                    <div class="form-group mb-3">
                        <div id="formdiv">
                            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="font-family:Roboto, sans-serif;font-size:24px; text-align: start"><strong>Vehicle Number</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left: 0px;font-family: Roboto, sans-serif;text-align: center;" name="vehicleid" placeholder="AAA-1111" required></div>
                            </div>
                            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="font-family: Roboto, sans-serif;font-size: 24px;text-align: left;"><strong>Type</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><select class="form-select" style="font-family: Roboto, sans-serif;text-align: center;" name="type" required>
                                        <optgroup label="Vehicle Type">
                                            <option value="car">Car</option>
                                            <option value="van">Van</option>
                                            <option value="bike">Bike</option>
                                            <option value="lorry">Lorry</option>
                                            <option value="3wheel">Three Wheel</option>
                                        </optgroup>
                                    </select></div>
                            </div>

                            <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" style="font-family:Roboto, sans-serif;" type="reset">Clear </button><button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">Submit </button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="justify-content-center text-center">
        <h3 style="text-align: center; color: #0dcaf0"><?php
            include 'dbcon.php';

            $sqlGetRemain = "SELECT `remain` FROM `tankremain`";
            $res = $conn -> query($sqlGetRemain);
            $data = $res->fetch_row();
            $remain = $data[0];
            echo $remain;

        ?>L Available</h3>
    </div>
<footer id="footer">

    <div style= "background: black; text-align: center; margin: 0px; padding:10px">
        <p style= "color:grey; font-family: raleway">Copyright (c) 2022 Pathirana GPSM</p>
    </div>
</footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>