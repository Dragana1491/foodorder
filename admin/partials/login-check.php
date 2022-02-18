<?php
//authorisation
if(!isset($_SESSION['user'])){ //if user session is not set 

    //redirect na login 
    $_SESSION['no-login-message'] ="<div class='failed text-center'> Molimo da se logujete </div>";
    header('location:'.SITEURL.'/admin/login.php');

}

?>