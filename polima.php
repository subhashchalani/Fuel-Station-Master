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
                <li class="nav-item">
                    <div class="justify-content-center text-center"><a href="login.php"> <button class="btn btn-primary" type="button" style="background: rgb(104,13,253);border-width: 6px;border-radius: 27px;">Login</button></a></div>
                </li>
            </ul>
        </div>
    </div>
</div>
    <div style="text-align:center;">
        <section class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center mb-3">
                        <h3><strong>Fuel Station Manager | පෝලිම</strong><br></h3>
                        <div class="justify-content-center text-center"></div>
                    </div>
                    <div class="col">
                        <div class="table-responsive" id="myTable">
                            <table class="table table-striped table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Vehicle Number</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'dbcon.php';

                                $sqlGetData = "SELECT `vehicleid`,`type`,`id` FROM `polima`";
                                $res = $conn ->query($sqlGetData);
                                $rowcount = $res->num_rows;
                                if($rowcount > 0){
                                    while($row = $res->fetch_assoc()){
                                        echo "<tr>";
                                        echo "<td>", $row['id'] ,"</td>";
                                        echo "<td>", $row['vehicleid'] ,"</td>";
                                        echo "<td>", $row['type'] ,"</td>";
                                        echo "</tr>";
                                    }
                                }
                                else{
                                    echo "<tr>";
                                    echo "<td>Empty Data</td>";
                                    echo "<td>Empty Data</td>";
                                    echo "<td>Empty Data</td>";
                                    echo "</tr>";
                                }



//                                $data = $res->fetch_array();
//                                print_r($data);
//                                for ($x = 0; $x<$rowcount;$x++){
//                                    $vehicleID = $data[$x][0];
//                                    $type = $data[$x][1];
//                                    $id = $data[$x][2];
//                                    echo '<tr>
//                                        <td>'. $id .'</td>
//                                        <td>'. $vehicleID .'</td>
//                                        <td>'. $type .'</td>
//                                    </tr>';
//                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>