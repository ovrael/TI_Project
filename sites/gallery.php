<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles//styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d747795ef6.js" crossorigin="anonymous"></script>
    <title>Jedzeniowo</title>
</head>
<style>
    <?php include "/styles/styles.css" ?>
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom" style="padding-top: 15px;">
        <h3 class="navbar-brand navbar-logo pt-2 pb-2">JEDZENIOWO</h3>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/sites/index.php">Start <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites/gallery.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites/menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Restauracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites/reservation.php">Rezerwacja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites/contact.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="contact-image">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="contact-page-text">Galeria</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="../images/gallery/1.jpg" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="../images/gallery/2.jpg" class="w-100 shadow-1-strong rounded mb-4" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="../images/gallery/3.jpg" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="../images/gallery/4.jpg" class="w-100 shadow-1-strong rounded mb-4" />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="../images/gallery/5.jpg" class="w-100 shadow-1-strong rounded mb-4" />
            <img src="../images/gallery/6.jpg" class="w-100 shadow-1-strong rounded mb-4" style="padding-top: 110px;"/>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="../images/gallery/7.jpg" class="w-100 shadow-1-strong rounded mb-4" />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="../images/gallery/8.jpg" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="../images/gallery/9.jpg" class="w-100 shadow-1-strong rounded mb-4" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="../images/gallery/10.jpg" class="w-100 shadow-1-strong rounded mb-4" />
            <img src="../images/gallery/11.jpg" class="w-100 shadow-1-strong rounded mb-4" />
        </div>
    </div>

</body>

</html>