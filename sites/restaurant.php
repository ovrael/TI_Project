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
                    <a class="nav-link" href="/sites/restaurant.php">Restauracja</a>
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


    <div class="restaurant-background">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="title-restaurant">Resteuracja<br />Jedzeniowo</h1>
            </div>
        </div>
    </div>

    <div class="container our-restaurant-section">
        <div class="row">
            <div class="col">
                <h1> <i class="fas fa-circle-notch mr-4 mb-4" style="color:#dbaf1d;"></i> Nasz historia </h1>

            </div>

            <div class="our-restaurant-section-text col">
                Restauracja powstała w połowie XX wieku i od tego czasu jest przekazywana w rodznie z poklenia na pokolenie. </br>
                Kiedyś zerwowano głównie polskie dania, lecz z czasem urozmaicono menu.
                </br></br>

                Restauracja Jedzeniowo to połączenie esencji włoskiej kuchni i stylu z tradycyjnymi polskimi daniami.
                W restauracji zlokalizowanej na Śląsku nie mogłoby zabraknąć dań związanych z regionem,
                dlatego też w naszej karcie znajdują się potrawy dla miłośników nie tylko włoskich kulinariów.
                Nasz Szef Kuchni skrupulatnie dba o każdy detal,
                a jedną z jego ambicji jest korzystanie w możliwie największym stopniu ze świeżych produktów lokalnych, które są źródłem niepowtarzalnego smaku goszczącego na talerzach naszych gości.
            </div>
        </div>
    </div>

    <hr>

    <div class="container our-restaurant-section">
        <div class="row">
            <div class="col">
                <h1> <i class="fas fa-circle-notch mr-4 mb-4" style="color:#dbaf1d;"></i> Catering </h1>

            </div>

            <div class="our-restaurant-section-text col">
                Proponujemy zestawy smacznych dań w przystępnych cenach z dostawą do biur, domów i innych miejsc. Catering można zamówić na terenie Katowic.
                Dowozimy gorące dania w podgrzewanych paterach utrzymujących ciepło. Zamówienia na catering można składać telefonicznie pod numerem <strong>+48 504 432 100 </strong>
                lub osobiście w naszej restauracji.
                </br></br>
                 Zamówienia przyjmujemy z minimum 2-dniowym wyprzedzeniem.
                 Minimalna kwota zamówienia: 100 zł. </br> 
                 W obrębie 15 km transport gratis.
            </div>
        </div>
    </div>


    <div class="container our-restaurant-section">
        <div class="row">
            <div class="col">
                <h1> <i class="fas fa-circle-notch mr-4 mb-4" style="color:#dbaf1d;"></i> Rezerwacja</h1>

            </div>

            <div class="our-restaurant-section-text col">
                Nasza restauracja oferuje rezerwację stolików na wybrany dzień i godzinę. Można zadzwonić do nas na numer </br> <strong>+48 504 432 100 </strong> lub dokonać reserwacji na stronie
                <a class="btn btn-outline-light mt-4 mt-4" href="/sites/reservation.php" role="button">Rezerwuj</a>
            </div>
        </div>

    </div>

    <div class="container our-restaurant-section">
        <div class="row">
            <div class="col">
                <h1> <i class="fas fa-circle-notch mr-4 mb-4" style="color:#dbaf1d;"></i> Organizacja imprez </h1>

            </div>

            <div class="our-restaurant-section-text col">
                Posiadamy bogate doświadczenie w organizowaniu wszelkiego rodzaju imprez okolicznościowych.
                Uroczystości rodzinne takie jak: chrzciny, komunie czy urodziny.
                Restauracja Jedzeniowo to idealne rozwiązanie – gwarantujemy pełną obsługę techniczną i gastronomiczną wydarzeń w naszych atrakcyjnych wizualnie i przestronnych wnętrzach.
                </br></br>
                Zadzwoń do nas i zaufaj naszemu doświadczeniu, a my zadbamy o całą resztę.
            </div>
        </div>

    </div>



</body>

</html>