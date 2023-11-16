<?php
    session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systeem logowania</title>
    <link rel="stylesheet" href="styl1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark mt-5">
    
    
   <nav class="navbar navbar-dark  fixed-top bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px;">LogowaniePHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-control="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="menuLabel">LogowaniePHP</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item gap-2">
                            <a class="nav-link active" aria-current="page" href="index.php">Strona Główna</a>
                        </li>

                        <?php
                            if(isset($_SESSION["useruid"])) {
                                echo ' 
                                <li class="nav-item gap-2">
                                    <a class="nav-link" aria-current="page" href="https://github.com/MateuszGurgul11">Github</a>
                                </li>';

                                echo '
                                <li class="nav-item gap-2">
                                    <a class="nav-link" aria-current="page" href="inc/logout.inc.php">Wyloguj się</a>
                                </li>';
                            } else {
                                echo '
                                <li class="nav-item gap-2">
                                    <a class="nav-link" aria-current="page" href="signup.php">Zarejestruj się</a>
                                </li>';

                                echo '
                                <li class="nav-item gap-2">
                                    <a class="nav-link" aria-current="page" href="login.php">Zaloguj się</a>
                                </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>  



    <div class="container pt-5">