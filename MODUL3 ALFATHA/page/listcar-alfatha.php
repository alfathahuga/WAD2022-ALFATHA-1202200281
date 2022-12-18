<?php
    require '../config/connector.php';
    $datas = showAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Show Room Alka</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="home-alfatha.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="listcar-alfatha.php">MyCar</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="addcar-alfatha.php" class="btn btn-light text-primary">Add Car</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="container mt-4">
            <div class="title">
                <h3 class="fw-bold">My Showroom</h3>
                <p class="text-secondary">List Showroom Alfatha - 1202200281</p>
            </div>
            <div class="container">
                <div class="row align-items-center mt-5 gap-4">
                    <?php foreach ($datas as $data) : ?>
                        <div class="col-md-5">
                            <div class="card p-3" style="width: 27rem;">
                                <img src="creta.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data['nama_mobil'] ?></h5>
                                    <p class="card-text"><?= substr($data['deskripsi'], 0, 80) ?></p>
                                </div>
                                <div class="d-flex justify-content-evenly gap-4">
                                    <a href="detail-alfatha.php?id=<?= $data['id_mobil'] ?>" class="btn btn-primary rounded-pill w-100">Detail</a>
                                    <a href="../config/delete.php?id=<?= $data['id_mobil'] ?>" class="btn btn-danger rounded-pill w-100">Delete</a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>