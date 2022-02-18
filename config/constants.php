<?php

session_start();
define('SITEURL', 'https://localhost/foodorder/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food_order');
//napravio je konstante da ne mora da stalno menja, ako bude trebalo . 

    //$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());  ovo je bilo na pocetku, pa je on napravio konstante i pi[e konstante, ali ne mora tkao. ]
  $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
  $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());



?>