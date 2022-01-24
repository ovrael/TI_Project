<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles//styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Fugaz+One&family=Kaushan+Script&family=Syncopate&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d747795ef6.js" crossorigin="anonymous"></script>
    <title>Jedzeniowo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom" style="padding-top: 15px;">
        <h3 class="navbar-brand navbar-logo pt-2 pb-2" style="font-family: 'Antic Didone', serif;">JEDZENIOWO</h3>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
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
                <li class="nav-item active">
                    <a class="nav-link" href="/sites/reservation.php">Rezerwacja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sites/contact.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="reservation-image">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="reservation-page-text">Zarezerwuj miejsce</h1>
            </div>
        </div>
    </div>
    <div class="row-4 justify-content-center contact-title pt-5 container">
        <form action="/php_scripts/makereservation.php" method="post">
            <div class="row justify-content-center">
                <div class="col-12 form-group">
                    <label for="inputName">Imię</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Podaj imię" name="name" require>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 form-group">
                    <label for="inputLastName">Nazwisko</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Podaj nazwisko" name="lastName" require>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Wpisz email" name="email" require>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 form-group">
                    <label for="inputPhoneNumber">Numer telefonu</label>
                    <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Podaj numer telefonu" name="phone" maxlength="9" pattern="[0-9]{9}" require>
                </div>
            </div>

            <div class="row">
                <div class="col-4 form-group">
                    <label for="reservationDate">Data:</label>
                    <input type="date" id="reservationDate" name="reservationDate" min="<?= date("Y-m-d"); ?>" require>
                </div>
                <div class="col-4 form-group">
                    <label for="hours">Godziny:</label>
                    <select id="hours" name="hours" require>
                        <option value="9.00">8.00</option>
                        <option value="10.30">10.30</option>
                        <option value="14.30">13.30</option>
                        <option value="16.00">16.30</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                    <label for="seats">Ilość miejsc:</label>
                    <select id="seats" name="seats" require>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="moreInformation">Dodatkowe informacje</label>
                    <textarea class="form-control" id="moreInformation" rows="3" name="moreInformation"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-light btn-lg">Rezerwuj</button>
            </div>
        </form>


    </div> -->
    <footer>
        <div class="container p-3">
            <div class="row">
                <div class="col-4 offset-4 text-center footer-logo">
                    J E D Z E N I O W O
                </div>
            </div>
        </div>
    </footer>
</body>

</html>