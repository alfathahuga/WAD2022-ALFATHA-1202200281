<?php
require "../config/insert.php";
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        header("Location: listcars-alfatha.php");
    }
}


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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="home-alfatha.php">Home</a>
                    </li>
                    <?php if (isset($_SESSION['login'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="listcars-alfatha.php">MyCar</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php if (!isset($_SESSION['login'])) : ?>
                <a href="login-alfatha.php" class="text-white text-decoration-none">Login</a>

            <?php else : ?>
                <div class="d-flex gap-4">
                    <a href="addcar-alfatha.php" class="btn btn-light">add car</a>
                    <div class="dropdown">
                        <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $dataUser['nama'] ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container">
        <h3>Tambah Mobil</h3>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="namamobil" class="form-label"><b>Nama Mobil</b></label>
                <input type="text" class="form-control" id="namamobil" name="namamobil" placeholder="Nama Mobil">
            </div>
            <div class="mb-4">
                <label for="namapemilik" class="form-label"><b>Nama Pemilik</b></label>
                <input type="text" class="form-control" id="namapemilik" name="namapemilik" placeholder="Nama Pemilik">
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label"><b>Merk</b></label>
                <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Mobil">
            </div>
            <div class="mb-4">
                <label for="tanggal" class="form-label"><b>Tanggal Beli</b></label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pembelian">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi Mobil"></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="form-label"><b>Foto</b></label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div>
            <div class="row mb-4">
                <b>Status Pembayaran</b>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lunas" id="lunas" value="lunas">
                        <label class="form-check-label" for="lunas">
                            Lunas
                        </label>
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lunas" id="xlunas" value="belumlunas">
                        <label class="form-check-label" for="xlunas">
                            Belum Lunas
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-4" name="submit">Selesai</button>
        </form>
    </div>


</body>

</html>