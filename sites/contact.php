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
        <h3 class="navbar-brand navbar-logo pt-2 pb-2 " style="font-family: 'Antic Didone', serif;">JEDZENIOWO</h3>
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

    <div class="contact-image">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="contact-page-text">Skontaktuj si?? z nami</h1>
            </div>
        </div>
    </div>

    <div class="container pb-4">
        <div class="row icon-row">
            <div class="col-sm text-center">
                <i class="fas fa-thumbtack fa-4x golden-text"></i>
                <h3 class="icon-title">Nasza lokalizacja</h3>
                <p class="icon-text">Restaracja Jedzeniowo <br> Katowice 40-217 <br> Staromiejska 12 </p>
            </div>
            <div class="col-sm text-center">
                <i class="fas fa-mobile-alt fa-4x golden-text"></i>
                <h3 class="icon-title">Zadzwo?? do nas</h3>
                <p class="icon-text">+48 504 432 100 </p>
            </div>
            <div class="col-sm text-center">
                <i class="far fa-clock fa-4x golden-text"></i>
                <h3 class="icon-title">Godziny otwarcia</h3>
                <p class="icon-text">Od poniedzia??ku do niedzieli <br> 9:00 - 23:00 </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center contact-title pb-4">
            <h2 class="contact-title"> Napisz do nas wiadomo????</h2>
        </div>
    </div>
    <div class="container">
        <div class="row-4 justify-content-center contact-title">
            <form action="/php_scripts/sendmessage.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-6 form-group">
                        <label for="inputName">Imi??</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Podaj imi??" name="name">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Wpisz email" name="email">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 form-group">
                        <label for="exampleFormControlTextarea1">Wiadomo????</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="message"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6">
                        <button type="submit" class="btn btn-outline-light btn-lg">Wy??lij</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


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