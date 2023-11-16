<?php include('header.php'); ?>


    <section class="container" style="margin-top: 100px;">
        <h2>Zarejestruj się</h2>
        <form class="row g-4" action="inc/signup.inc.php" method="post">
            <div class="col md-6"><input class="form-control" type="text" name="name" placeholder="Imie i Nazwisko..."></div>
            <div class="col md-6"><input class="form-control" type="text" name="email" placeholder="Email"></div>
            <div class="col-12"><input class="form-control" type="text" name="uid" placeholder="Nazwa Użytkownika"></div>
            <div class="col md-6"><input class="form-control" type="password" name="pwd" placeholder="Hasło"></div>
            <div class="col md-6"><input class="form-control" type="password" name="pwdrepeat" placeholder="Powtórz hasło"></div>
            <button class="btn btn-primary col-12"  type="submit" name="submit">Zarejestruj się</button>
        </form>

        <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput") {
                    echo '<p class="alert alert-danger mt-5 text-center">Wypełnij wszystkie pola </p>';
                } else if($_GET["error"] == "invaliduid") {
                    echo '<p class="alert alert-danger mt-5 text-center">Wybierz poprawną nazwe użytkownika!</p>';
                } else if($_GET["error"] == "invalidemail") {
                    echo '<p class="alert alert-danger mt-5 text-center">Niepoprawny email!</p>';
                } else if($_GET["error"] == "passworddontmatch") {
                    echo '<p class="alert alert-danger mt-5 text-center">Hasła nie są takie same!</p>';
                } else if($_GET["error"] == "stmtfailed") {
                    echo '<p class="alert alert-danger mt-5 text-center">Coś poszło nie tak!</p>';
                } else if($_GET["error"] == "usernametaken") {
                    echo '<p class="alert alert-danger mt-5 text-center">Nazwa użytkownika już istnieje!</p>';
                } else if($_GET["error"] == "none") {
                    echo '<p class="alert alert-success mt-5 text-center">Zarejestrowałeś się</p>';
                }
                
            }
        ?>
    </section>

       


<?php include('footer.php'); ?>