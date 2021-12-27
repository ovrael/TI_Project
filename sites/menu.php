<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/sites/menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Restauracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rezerwacja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="menu-background">
        <div class="container">
            <div class="row justify-content-end">
                <h1 class="landing-page-text">MENU</h1>
            </div>

            <?php
            $handle = fopen("../data/meals.csv", "r");
            if ($handle)
            {
                $categoryIndex = 0;
                $mealNumber = 1;
                while (($line = fgets($handle)) !== false)
                {
                    if (str_contains($line, "Category"))
                    {
                        if ($categoryIndex > 0)
                        {
                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';
                        }

                        $category = explode(';', $line)[1];

                        $side = "left";
                        $justify = "justify-content-end";
                        if ($categoryIndex % 2 == 1)
                        {
                            $side = "right";
                            $justify = "";
                        }
                        echo '<div class="row menu-category-row menu-category-' . $side . ' golden-text ' . $justify . '">' . $category . '</div><div class="spacer"></div>';
                        $categoryIndex++;

                        echo '<div class="row">';
                        echo '<table class="table menu-table-meals">';
                        echo '<thead class="menu-table-head">';
                        echo '<tr>';
                        echo '<th scope="col" width="5%" class="menu-table-head">Nr</th>';
                        echo '<th scope="col" width="30%"class="menu-table-head">Nazwa</th>';
                        echo '<th scope="col" width="50%"class="menu-table-head">Opis</th>';
                        echo '<th scope="col" width="5%" class="menu-table-head">Waga</th>';
                        echo '<th scope="col" width="5%" class="menu-table-head">Szczegóły</th>';
                        echo '<th scope="col" width="5%" class="menu-table-head">Cena</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                    }
                    else
                    {
                        $mealData = explode(';', $line);
                        echo '<tr>';
                        echo '<td class="menu-table-row">' . $mealNumber . '</td>';

                        for ($j = 0; $j < count($mealData); $j++)
                        {
                            echo '<td class="menu-table-row">' . $mealData[$j] . '</td>';
                        }

                        echo '</tr>';
                        $mealNumber++;
                    }
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                fclose($handle);
            }
            else
            {
                // error opening the file.
            }

            ?>
        </div>
    </div>

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