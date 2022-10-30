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
    <title>TP-2</title>
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

    <div class="text-center" style="margin-top: 2rem" ;>
        <h3>Rent your car now!</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (isset($_GET['img'])) : ?>
                    <img src="<?= $_GET['img'] ?>" alt="" class="img-fluid">
                <?php else : ?>
                    <img src="creta.jpg" alt="" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="datebook" class="form-label">Book Date</label>
                    <input type="date" class="form-control" id="datebook" name="datebook">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="time" name="time">
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration (days)</label>
                    <input type="number" class="form-control" id="duration" name="duration">
                </div>

                <div class="mb-3">
                    <label for="choice" class="form-label">Car Type</label>
                    <select class="form-select" id="choice">
                        <?php if (!isset($_GET['image'])) : ?>
                            <?php foreach ($cars as $car) : ?>
                                <option value="<?= $car['nama'] ?>"><?= $car['nama'] ?></option>
                            <?php endforeach; ?>

                        <?php else : ?>
                            <option value="<?= $_GET['namecar'] ?>"><?= $_GET['namecar'] ?></option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="numberphone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="numberphone" name="numberphone">
                </div>
                <div>
                    <p>Add Service(s)</p>
                    <div class="mb-3 form-check">
                        <div>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="health">
                            <label class="form-check-label" for="exampleCheck1">Rp. 50000/Health Protocol</label>
                        </div>
                        <div>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="driver">
                            <label class="form-check-label" for="exampleCheck1">Rp. 250000/Driver</label>
                        </div>
                        <div>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="fueltank">
                            <label class="form-check-label" for="exampleCheck1">Rp. 500000/Fuel Filled</label>
                        </div>

                    </div>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-success" name="submit" value="Book Now">
                </div>
                </form>


            </div>
        </div>
    </div>
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