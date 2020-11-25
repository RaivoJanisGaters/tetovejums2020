<!doctype html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="kontakti.css">
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<section class="contactus-one" id="contactus"><!-- Section id-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8703.269898463815!2d24.0697233!3d56.9519284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65f285c1939add1d!2sJanis%20Rozent%C4%81ls%20Riga%20Art%20School!5e0!3m2!1sen!2slv!4v1575803963433!5m2!1sen!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class=" col-md-5 col-sm-6">
                <div class="contact-block">
                    <div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
                        <h2 class="dart-heading">Sazinies ar mums</h2>
                    </div>

                    <div class="contact-form"><!-- contact form -->
                        <form class="row" id="contact" name="contact" method="post" >
                            <div class="form-group col-md-6">
                                <input type="text" id="inputName" class="form-control" placeholder="Vārds" required>
                                <label for="inputName"></label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="inputSurname" class="form-control" placeholder="Uzvārds" required>
                                <label for="inputSurname"></label>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Epasts" required autofocus>
                                <label for="inputEmail"></label>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" id="inputMessage" class="form-control" placeholder="Ziņojums" required>
                                <label for="inputMessage"></label>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" id="inputNumber" class="form-control" pattern="[0-9]{8}" title="Ievadiet pareizu telefona numuru(tam jāsastāv no 8 cipariem)" placeholder="Telefona Numurs" required>
                                <label for="inputNumber"></label>
                            </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase">NOSŪTĪT</button>
                        </form>
                    </div>

                    <hr>

                    <div class=" row contact-info">
                        <div class="col-md-12 col-sm-12">
                            <p class="addre"><i class="fa fa-map-marker"></i>Hāmaņa iela 2A, Zemgales priekšpilsēta, Rīga, LV-1007</p>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+10484579845">+371 26113417</a></p>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <p class="mail-id"><i class="fa fa-envelope"></i>ritakikuste@inbox.lv</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<br>
</body>
</html>