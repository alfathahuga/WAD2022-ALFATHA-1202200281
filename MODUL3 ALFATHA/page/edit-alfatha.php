<?php
require '../config/edit.php';
require '../config/connector.php';
$datas = detail($_GET['id'])[0];

if(isset($_POST['submit'])){
    if(edit($_POST) > 0){
        header("Location: listcar-alfatha.php");
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Show Room Alka</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning py-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home-alfatha.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="listcar-alfatha.php">My Car</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="addcar-alfatha.php" class="btn btn-light text-primary">Add Car</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-4">
            <div class="title">
                <h3 class="fw-bold">My Show Room</h3>
                <p class="text-secondary">List Show Room Alfatha - 1202200281</p>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <img src="creta.jpg" alt="mobil-detail" class="btn btn-light w-100">
                    </div>

                    <div class="col">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="namamobil" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="namamobil" name="namamobil" value="<?= $datas['nama_mobil'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="namapemilik" class=" form-label">Nama Pemilik</label>
                                <input type="text" class="form-control" id="namapemilik" name="namapemilik" value="<?= $datas['pemilik_mobil'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="<?= $datas['merk_mobil'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Beli</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $datas['tanggal_beli'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px" required><?= $datas['deskripsi'] ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?= $datas['id_mobil']?>">
                            <input type="submit" class="btn btn-primary my-5 px-5" name="submit" id="submit" value="Simpan">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>