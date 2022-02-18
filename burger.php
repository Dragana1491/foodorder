<?php

class Kategorija_hrane{


    function Lista_ponuda(){
            echo "<section class=''>";
                echo "<div class='wrapper'>";
                    echo "<div class=''>";
                    echo "<img src='burger1.jpg' alt='burger1' >";
                    echo "<h2> Premium burger </h2>";
                    echo "<p> sastojci </p>";
                    echo "<div> cena</div>";
                    echo "<button type='button' name='submit1' value='submit'> Naruci</button>";
                    echo "</div>";

                echo "</div>";
            echo "</section>";
    }
}

$lista = new Kategorija_hrane();


?>