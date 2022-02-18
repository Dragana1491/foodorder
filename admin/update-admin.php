<?php
include('partials/meni.php');?>


    <div class="main-content"> 
        <div class="wrapper">
            <h1> Update admin</h1>

                <?php
                $id =$_GET['id'];

                $sql ="SELECT * FROM admin WHERE id=$id";

                $res = mysqli_query($conn, $sql);

                if($res ==true){
                    $count =mysqli_num_rows($res);
                    if($count == 1){
                             //   echo "admin available";
                    $row =mysqli_fetch_assoc($res);
                    $full_name = $row['full_name'];
                    $username= $row['username'];
                    
                    
                            }else{
                        header('location:'.SITEURL.'/admin/manage-admin.php');
                        //redirect to manage admin stranu 
                    }
                }
              
                ?>
            <form action="" method ="POST">
            <table>
            <tr>
                    <td> <label> Ime: </label></td>

                    <td> <input type="text" name="name" value="<?php echo $full_name; ?>"><br /></td>
                    </tr>
                    <tr>
                    <td> <label> Korisnicko ime:</label></td>
                    <td><input type="text" name="username" value="<?php  echo $username; ?>"><br /></td>
                    </tr>
                    <tr>
                    
                    <tr>
                    
                        <td > 
                            <input type="hidden" name = "id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update admin" ><br />
                        </td>
                    </tr>

            </table>    


            </form>
        </div>
    </div>

<?php
if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $full_name = $_POST['name'];
    $username = $_POST['username'];
    //echo "Kliknuto na submit dugme";

    $sql ="UPDATE admin SET
    full_name = '$full_name',
    username = '$username'
    WHERE id = '$id'
    ";

    $res = mysqli_query($conn, $sql);
    //dal je iyvrsen kveri 

    if($res ==true){
//updateovan admin
$_SESSION['update'] =" <div class='success'> Update uspesan</div>";

header('location:'.SITEURL.'/admin/manage-admin.php');
    }else{
        $_SESSION['update'] =" <div class='failed'> Update nije uspesan</div>";

header('location:'.SITEURL.'/admin/manage-admin.php');
    }
}

?>



    <?php include('partials/footer.php');
    ?>