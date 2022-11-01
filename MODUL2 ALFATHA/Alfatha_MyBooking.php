<?php
$duration = $_POST['duration'];
$checkout = strtotime("+$duration days", strtotime($_POST['datebook']));
$car = $_POST['choice'];

if($car == 'Innova'){
    $price = 3200000;
}elseif($car == 'Creta'){
    $price = 4000000;
}elseif($car == 'Freed'){
    $price = 2750000;
}

$ttlPrice = $price*$duration;
if(isset($_POST['health'])){
    $ttlPrice += 50000;
}
if(isset($_POST['driver'])){
    $ttlPrice += 250000;
}
if(isset($_POST['fueltank'])){
    $ttlPrice += 500000;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD RENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="Alfatha_Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="Alfatha_Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="thxyou">
            <center>
                <br>
                <h4>Thank You ALFATHA HUGA_1202200281 for reserving</h4>
                <h5>Please double check your reservation details</h5>
            </center>

            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name </th>
                        <th scope="col">Check In </th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Car Type </th>
                        <th scope="col">Phone Number </th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="table-second">
                    <td><?= rand(1111111111,9999999999)?></td>
                    <td><?= $_POST['name']?></td>
                    <td><?= $_POST['datebook'].' '.$_POST['time']?></td>
                    <td><?= date("Y-m-d", $checkout).' '.$_POST['time']?></td>
                    <td><?= $car?></td>
                    <td><?= $_POST['numberphone']?></td>
                    <td>
                        <ul>
                        <?php if(isset($_POST['driver'])):?><li>Driver</li><?php endif?>
                        <?php if(isset($_POST['insurance'])):?><li>Trip Insurance</li><?php endif?>
                        <?php if(isset($_POST['gasoline'])):?><li>Full Filled</li><?php endif?>
                        </ul>
                        <?php if(!isset($_POST['driver']) and !isset($_POST['insurance']) and !isset($_POST['gasoline'])):?>-<?php endif?>
                    </td>
                    <td><?= $ttlPrice?></td>
                </tr>
                </tbody>
            </table>
            <footer>
                <div class="py-2" style="background-color: #e9ecef;">
                    <div class="container text-center">
                        <p class="mb-1">Created by Alfatha_1202200281</p>
                        <div class="row justify-content-center">
                            <div class="col-lg-2 mb-1">
                            </div>
                        </div>
            </footer>
</body>
</html>