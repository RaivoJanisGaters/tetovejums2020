<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
        <img src="images/nellijalogobalts.png" alt="logo" style="width:90px;">
    </a>

    <!-- Links -->
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsibleNavbar" style="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Jaunumi</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="galerija.php" id="navbardrop" data-toggle="dropdown">
                    Galerija
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="galerija.php">Bildes</a>
                    <a class="dropdown-item" href="video_galerija.php">Video</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="kontakti.php">Kontakti</a>
            </li>
        </ul>
    </div>
</nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ielogoties</h5>
                    <form class="form-signin">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Epasts" required autofocus>
                            <label for="inputEmail"></label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Parole" required>
                            <label for="inputPassword"></label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Atcerēties paroli</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ienākt</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2>Tetovējumu cenas</h2>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Izmērs</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Neliels Tetovējums (Zem 5 cm)</td>
            <td><strong>€30 – €100</strong></td>
        </tr>
        <tr>
            <td>Mazs Tetovējums (5 - 10 cm)</td>
            <td><strong>€50 – €250</strong></td>
        </tr>
        <tr>
            <td>Viduvējs Tetovējums (10 - 15 cm)</td>
            <td><strong>€150 – €450</strong></td>
        </tr>
        <tr>
            <td>Liels Tetovējums (15+ cm)</td>
            <td><strong>€500 – €4,000</strong></td>

        </tr>
        </tbody>
    </table>
    <br>
</body>
</html>