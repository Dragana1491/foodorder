<?php
        class Header{
            

            function meni(){
                echo "<div  class='wrapper'>";
                    echo "<div  class='meni'>";
                        echo "<ul>";
                            echo "<li><a href='#'> Pocetna </a></li>";
                            echo "<li><a href='#'> Korpa </a></li>";
                            echo "<li><a href='#'> Log in </a></li>";
                            echo "<li><a href='#'> Kontakt </a></li>";
                        echo "</ul>";
                    echo "</div>";
                echo "</div>";

            }
            function footer(){
                echo "<div  class='container'>";
                    echo "<div  class='futer'>";

                        echo "<div  class='futer_stubac'>";
                            echo "<h2> O nama</h2>";
                                echo "<div><a href='#'> Kako je sve pocelo </a></div>";
                                echo "<div><a href='#'> Cesta pitanja </a></div>";
                                echo "<div><a href='#'> Terms of service </a></div>";
                        echo "</div>";

                        echo "<div  class='futer_stubac'>";
                            echo "<h2> Kontakt</h2>";
                        
                                echo "<div><a href='#'> Kontakt </a></div>";
                                echo "<div><a href='#'> Podrska </a></div>";
                        echo "</div>";

                        echo "<div  class='futer_stubac'>";
                            echo "<h2> Drustvene mreze</h2>";
                                echo "<div><a href='#'> fejsbuk </a></div>";
                                echo "<div><a href='#'> inst </a></div>";
                                echo "<div><a href='#'> tiktok </a></div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
            function baner(){
                echo "<div class='banner_div_ad'> . </div>";
            }
        }

        $h = new Header();
       
       
?>