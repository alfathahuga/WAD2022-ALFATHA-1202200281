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
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="home-alfatha.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="listcar-alfatha.php">MyCar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg m-auto text-left">
          <h1 class="mb-3">Selamat Datang di Show Room Alka</h1>
          <p class="lead mb-5">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
          <a href="listcar-alfatha.php" type="button" class="btn btn-primary">My Car</a>
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