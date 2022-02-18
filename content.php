<?php
class Food{

    function content(){
        echo "<section class='middle'>";

            echo "<div class='content'>";

                echo "<div class='food_category'>";
                    echo "<a href='burgeri.php'><img src='pic/burger.jpg' ></a>";
                echo "</div>";
                
                echo "<div class='food_category'>";
                    echo "<a href='pice.php'><img src='pic/pizza.jpg' ></a>";
                echo "</div>";

                echo "<div class='food_category'>";
                    echo "<a href='rostilj.php'><img src='pic/meal.jpg' ></a>";
                echo "</div>";

                echo "<div class='food_category'>";
                    echo "<a href='vege.php'><img src='pic/vege.jpg' ></a>";
                echo "</div>";

                echo "<div class='food_category'>";
                    echo "<a href='desert.php'><img src='pic/cake.jpg' ></a>";
                echo "</div>";

            echo "</div>";
        echo "</section>";
    }
}

$c = new Food;

?>