<?php
include('partials/meni.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../mojstyle.css">
</head>
<body>

    <div class="main-content"> 
        <div class="wrapper">
            <h1> Add admin</h1>

            <?php

                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }


            ?>
            <form action="" method="POST">
                <table class="general_table1">
                    <tr>
                    <td> <label> Ime: </label></td>

                    <td> <input type="text" name="name" placeholder="Upisite Vase ime"><br /></td>
                    </tr>
                    <tr>
                    <td> <label> Korisnicko ime:</label></td>
                    <td><input type="text" name="username" placeholder="Upisite Vase korisnicko ime"><br /></td>
                    </tr>
                    <tr>
                    <td><label> Sifra: </label></td>
                    <td> <input type="password" name="pass" placeholder="Upisite Vasu sifru"><br /></td>
                    </tr>
                    <tr>
                    
                        <td > 
                            <input type="submit" name="submit" value="Add admin" ><br />
                        </td>
                    </tr>
                </table>
                

            </form>
         

        </div>


    </div>


<?php include('partials/footer.php');
?>

<?php
if(isset($_POST['submit'])){
    //proveravamo da li je dugme kliknuto
    $full_name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['pass']);

    $sql = "INSERT INTO admin SET
    full_name = '$full_name',
    username ='$username',
    password = '$password'
    ";
    // $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    // $db_select = mysqli_select_db($conn, 'food_order') or die(mysqli_error());
   $res = mysqli_query($conn, $sql) or  die (mysqli_error());
   if($res ==true){
       //ubaceno u bazu
       //echo "Data inserted"; meni ya svako rifresovanje ubaci jednog admina, sve duplo. to je greska kod submita i ifset
   $_SESSION['add'] = "Admin addes successgully";
   header("location:".SITEURL.'admin/manage-admin.php');
    }else{$_SESSION['add'] = "Failed to add";
        header("location:".SITEURL.'admin/manage-admin.php');
       //nije ubaceno u bazu
      // echo "nije ubaceno";
   }
}
/*else{
    echo "Kliknite dugme Add admin";
}*/

?>
</body>
</html>

   