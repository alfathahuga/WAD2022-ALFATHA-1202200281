<?php
$cars = [
    [
        "nama" => "Innova",
        "harga" => 3200000,
        "kursi" => 8,
        "cc" => 2393,
        'type' => 'Manual',
        'image' => 'innova'
    ],
    [
        "nama" => "Creta",
        "harga" => 4000000,
        "kursi" => 6,
        "cc" => 1500,
        'type' => 'Manual',
        'image' => 'creta'
    ],
    [
        "nama" => "Freed",
        "harga" => 2750000,
        "kursi" => 7,
        "cc" => 1500,
        'type' => 'Automatic',
        'image' => 'freed'
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .card img {
            height: 200px;
        }
    </style>
    <title>EAD Rent</title>
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

    <main>
        <div class="container">
            <div class="welcome">
                <center>
                    <br>
                    <h2>WELCOME TO EAD RENT</h2>
                    <p>Find your best deal, here!
                </center>
            </div>
            <div class="row justify-content-center mt-5">
                <?php foreach ($cars as $car) : ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $car['image'] ?>.jpg" class="card-img-top car-img">
                            <div class="card-body">
                                <h5 class="card-title"><?= $car['nama']?></h5>
                                <p class="card-text">Rp<?= $car['harga']?>/day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center fw-semibold">
                                <li class="list-group-item  text-primary"><?= $car['kursi']?> Kursi</li>
                                <li class="list-group-item text-primary"><?= $car['cc']?> cc</li>
                                <li class="list-group-item text-primary"><?= $car['type']?></li>
                            </ul>
                            <div class="card-body">
                                <center>
                                <a href="Alfatha_Booking.php" type="button" class="btn btn-primary">BOOK NOW</button></a>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <class="py-5" style="background-color: #e9ecef;">
    </main>
    <br>
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