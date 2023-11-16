<?php include('header.php'); ?>


<header class="bg-primary text-white text-center py-5">
                        <?php
                            if(isset($_SESSION["useruid"])) {
                                echo '<p> Witaj'. $_SESSION["useruid"] . '</p>';
                            }
                        ?>


        <div class="container">
            <h1 class="display-4">Witaj na Mojej Stronie</h1>
            <p class="lead">Profesjonalny szablon strony z wykorzystaniem Bootstrapa</p>
        </div>
    </header>

    <!-- Sekcja z treścią -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Nasz Zespół</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel libero eu ipsum fermentum...</p>
                    <p>Proin non risus sit amet nisl tempus convallis quis ac lectus. Nullam pharetra, ipsum sed...</p>
                </div>
                <div class="col-lg-4">
                    <h2 class="mb-4">Aktualności</h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Artykuł 1</a>
                        <a href="#" class="list-group-item list-group-item-action">Artykuł 2</a>
                        <a href="#" class="list-group-item list-group-item-action">Artykuł 3</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interaktywny element JavaScript -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Interaktywny Element</h2>
            <button class="btn btn-primary" onclick="alert('Witaj!')">Kliknij mnie</button>
        </div>
    </section>




<?php include('footer.php'); ?>