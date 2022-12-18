<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
              <a class="nav-link" href="listcarss-alfatha.php">MyCar</a>
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

  <main>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg m-auto text-left">
          <h1 class="mb-3">Selamat Datang di Show Room Alka</h1>
          <p class="lead mb-5">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
          <a href="listcars-alfatha.php" type="button" class="btn btn-primary">My Car</a>
          <br>
          <br>
          <div class="col-lg m-auto text-left">
            <img src="logo-ead.png" width="auto" height="30">
            <spann class="px-3">Alfatha_1202200281</spann>
          </div>
        </div>

        <div class="col-lg m-auto">
          <div class="col">
            <?php if (isset($_GET['image'])) : ?>
              <img src="<?= $_GET['image'] ?>.jpg" alt="" class="img-fluid">
            <?php else : ?>
              <img src="creta.jpg" class="img-fluid">
            <?php endif; ?>
          </div>
        </div>
  </main>

</body>

</html>