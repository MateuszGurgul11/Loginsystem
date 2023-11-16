<?php include('header.php'); ?>


<header class="bg-danger text-white text-center py-5">
                        <?php
                            if(isset($_SESSION["useruid"])) {
                                echo '<p> Witaj '. $_SESSION["useruid"] . '</p>';
                            }
                        ?>


        <div class="container">
            <h1 class="display-4">System Logowania</h1>
            <p class="lead">Strona została stworzona za pomocą Bootstrapa, PHP, CSS i HTML</p>
        </div>
    </header>

    <!-- Sekcja z treścią -->
    <div class="jumbotron text-center">
    <h1 class="display-4">Michael Jordan</h1>
    <p class="lead">Historia wielkiego koszykarza</p>
</div>

<!-- Sekcja z opisem -->
<div class="container section pb-4">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-white">Wczesne lata i Kariera</h2>
            <p class="text-white">Michael Jeffrey Jordan urodził się 17 lutego 1963 roku w Nowym Jorku. Jako dziecko wykazywał ogromne zainteresowanie sportem, szczególnie koszykówką. Jordan uczęszczał do szkoły średniej Emsley A. Laney w Wilmington w stanie Karolina Północna, gdzie zwrócił uwagę na swoje umiejętności koszykarskie.</p>
            
            <p class="text-white">Po ukończeniu szkoły średniej Jordan został przyjęty na University of North Carolina, gdzie w barwach drużyny uniwersyteckiej zdobywał pierwsze sukcesy. W 1982 roku poprowadził swoją drużynę do tytułu mistrza NCAA, a jego rzut zdobywający mistrzostwo stał się jednym z najbardziej ikonicznych momentów w historii koszykówki.</p>

            <p class="text-white">Michael Jordan dołączył następnie do Chicago Bulls w NBA w 1984 roku. Jego niesamowita kariera w NBA obejmuje nie tylko szereg indywidualnych osiągnięć, ale także sześć tytułów mistrza NBA z Chicago Bulls w latach 1991–1993 i 1996–1998. Jordan zdobył wiele nagród, w tym pięciokrotnie tytuł MVP (Najbardziej Wartościowy Zawodnik).</p>
        </div>
        <div class="col-md-4">
            <img src="2.jpg" alt="Wczesne lata" class="img-thumbnail"  style="width: 200px;">
        </div>
    </div>
</div>

<!-- Sekcja z filmami -->
<div class="container section bg-light">
    <h2 class="text-center mb-4">Filmy</h2>
    <div class="row">
        <div class="col-md-4">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/oKNy-MWjkcU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Space Jam" (1996)</p>
        </div>
        <div class="col-md-4">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/Wc0kFgrMS0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Space Jam: Nowa Era" (2021)</p>
        </div>
        <div class="col-md-4">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/0hwdrKRlqqI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>The Last Dance" (2020)</p>
        </div>
    </div>
</div>

<!-- Sekcja z galerią zdjęć -->
<div class="container section">
    <h2 class="text-center mb-4">Galeria zdjęć</h2>
    <div class="row">
        <div class="col-md-4 img-fluid">
            <img src="1.jpg" alt="Zdjęcie 1" style="width: 400px;" class="rounded mx-auto d-block">
        </div>
        <div class="col-md-4 img-fluid">
            <img src="2.jpg" alt="Zdjęcie 2" style="width: 200px;" class="rounded mx-auto d-block">
        </div>
        <div class="col-md-4 img-fluid">
            <img src="3.jpg" alt="Zdjęcie 4" style="width: 400px;" class="rounded mx-auto d-block">
        </div>
    </div>
</div>

<!-- Stopka -->
<footer class="text-center py-3">
    <p>&copy; 2023 Michael Jordan. Wszelkie prawa zastrzeżone.</p>
</footer>




<?php include('footer.php'); ?>