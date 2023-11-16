<?php include('header.php'); ?>


    <section class="container" style="margin-top: 100px;">
        <h2 class="text-white">Zaloguj się</h2>
        <form class="row g-3" action="inc/login.inc.php" method="post">
            <input class="form-control" type="text" name="uid" placeholder="Nazwa Użytkownika/Email">
            <input class="form-control"  type="password" name="pwd" placeholder="Hasło">
            <div class="d-grid col-6 mx-auto"><button class="btn btn-primary"  type="submit" name="submit">Zaloguj się</button></div>
        </form>


        <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput") {
                    echo '<p class="alert alert-danger mt-5 text-center">Wypełnij wszystkie pola </p>';
                } else if($_GET["error"] == "wronglogin") {
                    echo '<p class="alert alert-danger mt-5 text-center">Niepoprawny login!</p>';
                }
            }
        ?>
    </section>
       

    


<?php include('footer.php'); ?>