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
                    <a class="nav-link" href="#">Restauracja</a>
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
    <div class="row-4 justify-content-center contact-title pt-5">
        <form>
            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Wpisz email">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="inputName">Imię</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Podaj imię">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="inputLastName">Nazwisko</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Podaj nazwisko">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="inputPhonNumber">Numer telefonu</label>
                    <input type="number" class="form-control" id="inputPhonNumber" placeholder="Podaj numer telefonu">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 form-group">
                    <label for="hours">Godziny</label>
                    <select id="hours" name="hours">
                        <option value="900">9.00</option>
                        <option value="1030">10.30</option>
                        <option value="1430">14.30</option>
                        <option value="1600">16.00</option>
                    </select>
                    <label for="seats">Ilość miejsc</label>
                    <select id="seats" name="seats">
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
                    <textarea class="form-control" id="moreInformation" rows="3"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <button type="button" class="btn btn-outline-light btn-lg">Rezerwuj</button>
                </div>
            </div>
        </form>
    </div> -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>