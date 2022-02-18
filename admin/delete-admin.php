<?php
include ('../config/constants.php');


//get the ID of admin to be deleted poenta je da dobijem id na ovoj stranici ya brisanje. tj. da se poveze sa stranicom manage admin.
$id =$_GET['id'];
//2.  create sql query to delete admin
$sql = "DELETE FROM admin WHERE id =$id";

//uradi query
$res = mysqli_query($conn, $sql);

//provera da li se izvrsava kveri 
if($res == true){
    //uspela
    //echo "deleted";
    //napraviti session varijablu da prikaze poruku da je uspelo 
    $_SESSION['delete'] = "<div class='success'> Admin uspesno obrisan </div>";
    //vratiti na manage admin

    header('location:'.SITEURL.'/admin/manage-admin.php');
}else{
    //nije uspelo
    //echo "Error";
    $_SESSION['delete'] = "<div class='failed' > Brisanje nije uspelo </div>";

    header('location:'.SITEURL.'/admin/manage-admin.php');
}

//3. rediredt to manage admin page with message





?>