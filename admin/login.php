<?php  
 include('../config/constants.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Food- order system </title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center"> Login </h1>
<?php
if(isset($_SESSION['login'])){
    echo $_SESSION['login'];
    unset( $_SESSION['login']);
}
if(isset($_SESSION['no-login-message'] )){
    echo $_SESSION['no-login-message'] ;
    unset($_SESSION['no-login-message']) ;
}

?>
        <form action="" method="POST" class="text-center">
            <label> Username </label><br />
            <input type ="text" name="username" placeholder="Napisite username"><br /><br />

            <label> Password </label><br />
            <input type ="password" name="pass" placeholder="Napisite sifru"><br /><br />

            <input type="submit" name="submit" value="Login">

        </form>


        <p class="text-center"> Created by Dragana </p>

    </div>
</body>
</html>

<?php
    if(isset($_POST)){
        //echo "kliknuto ";
        $username =$_POST['username'];
        $pass = md5($_POST['pass']);

        $sql ="SELECT * FROM admin WHERE username='$username' AND password='$pass'";

            $res =mysqli_query($conn, $sql);

           $count =mysqli_num_rows($res);

           if($count == 1){
                $_SESSION['login'] = "<div class='success'> Login uspesan </div> ";
                $_SESSION['user']= $username;
                header('location:'.SITEURL.'admin/');
           }else{
            $_SESSION['login'] = "<div class='failed'> Login nije uspesan. Ponovo </div> ";
            header('location:'.SITEURL.'admin/login.php');
           }
    } else{
       // echo" nije kliknuto" ;   
    }




?>