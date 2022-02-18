<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food order website - home page </title>
    <link rel="stylesheet" href="../css/admin.css"> 
</head>
<body>
    
   <?php include('partials/meni.php'); ?>


    <!--content  start -->
    <div class="main-content"> 
        <div class="wrapper ">
        <h1> manage admin </h1>
<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if (isset($_SESSION['delete'])){
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if (isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
if (isset($_SESSION['user-not-found'])){
    echo $_SESSION['user-not-found'];
    unset($_SESSION['user-not-found']);
}
if (isset($_SESSION['pass-not-match'])){
    echo $_SESSION['pass-not-match'];
    unset($_SESSION['pass-not-match']);
}
if (isset($_SESSION['pass-changed'])){
    echo $_SESSION['pass-changed'];
    unset($_SESSION['pass-changed']);
}
?>

            <button class="add_button"><a href="add_admin.php">  Add admin </a> </button>

            <table class="general_table">

          <tr >
              <th>S.N.</th>
              <th>Full name </th>
              <th> Username </th>
              <th> Action</th>
          </tr>

          <?php
                $sql ="SELECT * FROM  admin";
                $res =mysqli_query($conn, $sql);

                //check
                if($res == true){
                    $count = mysqli_num_rows($res);  //da uyme sve redove iy baze
                            $sn =1;
                    //proverava broj redova
                    if($count >0){
                        while($rows= mysqli_fetch_assoc($res)){
                            $id =$rows['id'];
                            $full_name =$rows['full_name'];
                            $username =$rows['username'];
?>
                                <tr>
                                            <td><?php echo $sn++ ?></td>
                                            <td><?php echo $full_name ?></td>
                                            <td><?php echo $username ?></td>
                                            <td><button class="Update_admin_button"><a href="update-admin.php?id=<?php echo $id; ?>">Update admin </a></button> 
                                               <button class="Update_admin_button"><a href="delete-admin.php?id=<?php echo $id; ?>"> Delete admin</a></button> 
                                               <button class="Update_admin_button"><a href="change-pass.php?id=<?php echo $id; ?>">Change password </a></button> 
                                            </td>
                                        </tr>
<?php

                        }
                    }else{
                        echo"nema podataka";                    }

                }
          ?>
          

            </table>
           <div class="clear-fix"></div> <!--kako ovo radi-->
        </div>
    </div> 
    <!--content end -->

    <?php include('partials/footer.php'); ?>
 

</body>
</html>