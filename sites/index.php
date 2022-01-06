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


    <div class="nav-image">
        <div class="container">
            <div class="row justify-content-end">
                <h1 class="landing-page-text ml-4">Ekskluzywny smak <br> europejskiej kuchni !</h1>
            </div>
            <div class="row justify-content-end button-menu">
                <a class="btn btn-light btn-lg mt-3" href="/sites/menu.php" role="button">Menu</a>
            </div>
        </div>
    </div>



    <div class="container pb-4">
        <div class="row icon-row">
            <div class="col-sm text-center">
                <i class="fas fa-thumbtack fa-5x " style="color:#dbaf1d;"></i>
                <h3 class="icon-title">Nasza lokalizacja</h3>
                <p class="icon-text">Restaracja Jedzeniowo <br> Katowice 40-217 <br> Staromiejska 12 </p>
            </div>
            <div class="col-sm text-center">
                <i class="fas fa-mobile-alt fa-5x " style="color:#dbaf1d;"></i>
                <h3 class="icon-title">Zadzwoń do nas</h3>
                <p class="icon-text">+48 504 432 100 </p>
            </div>
            <div class="col-sm text-center">
                <i class="far fa-clock fa-5x " style="color:#dbaf1d;"></i>
                <h3 class="icon-title">Godziny otwarcia</h3>
                <p class="icon-text">Od poniedziałku do niedzieli <br> 9:00 - 23:00 </p>
            </div>
            <div class="col-sm text-center">
                <i class="far fa-calendar-alt fa-5x " style="color:#dbaf1d;"></i>
                <h3 class="icon-title">Zarezerwuj stolik</h3>
                <button type="button" class="btn btn-outline-light mt-4 mt-4">Rezerwuj</button>
            </div>

        </div>
        <div class="row">
            <div class="col align-self-center div1 text-center">
                <h1 class="font-color1 pb-4">Poznaj naszą restauracje!</h1>
                <p class="font-color1 text">
                    W 2015 powstało miejsce z pasji do designu oraz przyjemności jedzenia. Szef kuchni Marcin Bródka serwuje dania dbając o najbardziej wyrafinowane podniebienia,
                    a swój kunszt potwierdza zdobywając np. Złotą Chochlę oraz Luksusowa Marka Roku 2016. <br>
                    <br>
                    W Jedzeniowo serwowane są dania szeroko pojętej kuchni europejskiej. U nas zamówić można różnorodne dania, które zaspokoją każde podniebienie.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-center div1 text-center">
                <h1 class="font-color1 pb-4">Sprawdź nasze menu !</h1>
                <h4 class="font-color2">Najpopularniejsze potrwy</h4>
                <div class="row" style="padding-top: 30px; font-size:20px">
                    <div class="col-lg-3 col-md-12 font-color1 pb-3"><i class="fas fa-pizza-slice fa-lg mr-3"></i> Pizza</div>
                    <div class="col-lg-3 col-md-12 font-color1 pb-3"> <i class="fas fa-fish fa-lg mr-3"></i> Ryba</div>
                    <div class="col-lg-3 col-md-12 font-color1 pb-3"><i class="fas fa-hamburger fa-lg mr-3"></i> Hamburger</div>
                    <div class="col-lg-3 col-md-12 font-color1 pb-3"><i class="fas fa-egg fa-lg mr-3"></i> Jajecznica</div>
                </div>
                <div style="padding-top: 60px; font-size:20px">
                    <!-- <button type="button" href="#" class="btn btn-outline-light btn-lg">Zobacz więcej</button> -->
                    <a class="btn btn-outline-light btn-lg" href="/sites/menu.php" role="button">Zobacz więcej</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col text-center" style="padding-top: 60px;">
                <h1 class="font-color1 pb-4">Zobacz naszą restauracje <i class="fas fa-arrow-down ml-2"></i></h1>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfj1N97shQMYLG9ij5WNxW5Zw4RsBeb_CrwQ&usqp=CAU" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="https://images.pexels.com/photos/2878742/pexels-photo-2878742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-100 shadow-1-strong rounded mb-4" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://images7.alphacoders.com/596/thumb-1920-596343.jpg" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="https://images.unsplash.com/photo-1595257841889-eca2678454e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNoZWZ8ZW58MHx8MHx8&w=1000&q=80" class="w-100 shadow-1-strong rounded mb-4" />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://images.unsplash.com/photo-1581349485608-9469926a8e5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNoZWZ8ZW58MHx8MHx8&w=1000&q=80" class="w-100 shadow-1-strong rounded mb-4" />

            <img src="https://ak.picdn.net/shutterstock/videos/15277867/thumb/1.jpg" class="w-100 shadow-1-strong rounded mb-4" />
            <a class="btn btn-outline-light btn-lg ml-sm-3 ml-lg-0 " href="/sites/gallery.php" role="button"><i class="fas fa-arrow-down ml-2 mr-2"></i></a>
        </div>

    </div>

</body>

</html>