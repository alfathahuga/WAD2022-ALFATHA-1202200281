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
                            <a class="nav-link" href="listcar-alfatha.php">MyCar</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php if (!isset($_SESSION['login'])) : ?>
                <a href="login-faris.php" class="text-white text-decoration-none">Login</a>

            <?php else : ?>
                <div class="d-flex gap-4">
                    <a href="addcar-alfatha.php" class="btn btn-light">add car</a>
                    <div class="dropdown">
                        <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alfatha
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile-faris.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</body>

</html>