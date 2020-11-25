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
</nav>
<div class="tattoo">
    <iframe class="col-sm-6 col-md-4 col-lg-3 item" width="560" height="315" src="https://www.youtube.com/embed/r_sR1uX32Uk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="col-sm-6 col-md-4 col-lg-3 item" width="560" height="315" src="https://www.youtube.com/embed/wK1Mpeze9pY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="col-sm-6 col-md-4 col-lg-3 item" width="560" height="315" src="https://www.youtube.com/embed/hsVMmq04DUU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="col-sm-6 col-md-4 col-lg-3 item" width="560" height="315" src="https://www.youtube.com/embed/pdk4ryr77i4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<br>
</body>
</html>