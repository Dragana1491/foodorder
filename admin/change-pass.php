<?php
include('partials/meni.php');?>

<div class="main-content"> 
        <div class="wrapper">
            <h1> Change password</h1>


            <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }
            
            
            ?>
<form action="" method="POST">
            <table>
            <tr>
                    <td> Stara sifra</td>

                    <td> <input type="password" name="stari_pass" placeholder="stara sifra"><br /></td>
                    


            </tr>
            <tr>
                    <td> Nova sifra</td>

                    <td> <input type="password" name="novi_pass" placeholder="nova sifra"><br /></td>
                    


            </tr>
            <tr>
                    <td> Potvrdi sifru </td>

                    <td> <input type="password" name="confirm_pass" placeholder="potvrdi sifru"><br /></td>
                    


            </tr>
            <tr>
                    
                    <td > 
                        <input type="hidden" name = "id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change pass" ><br />
                    </td>
            </tr>
                </table>
                </form>

        </div>
</div>
<?php
//da li je dugme pritisnuto 

if(isset($_POST['submit'])){
    //echo "kliknuto";
    //1. dobiti podatke iy forme
        $_POST['id'];
        $current_pass = md5($_POST['stari_pass']);
        $new_pass = md5($_POST['novi_pass']);
        $confirm_pass = md5($_POST['confirm_pass']);
    //2. proveriti da li postoji korisnik sa tom sifrom
        $sql = "SELECT * FROM admin WHERE id=$id AND password=$current_pass";
        $res =mysqli_query($conn, $sql);
        if($res ==true){
            $count =mysqli_num_rows($res);

            if($count == 1){
                //postoji sam jedan s tom sifrom
                //echo "postoji ";
                    if($new_pass == $comfirm_pass){
                            $sql2 ="UPDATE admin SET
                            password ='$new_pass'
                            WHERE id='$id'
                            "

                            $res2 = mysqli_query($conn, $sql2);

                            if($res2 ==true){
                                $_SESSION['change-pass'] = "<div class='success'> Pass changed </div>";
                                header('location:'.SITEURL.'/admin/manage-admin.php');
                            }else{
                                $_SESSION[''] = "<div class='failed'> Failed to change </div>";
                                            header('location:'.SITEURL.'/admin/manage-admin.php');
                            }
                    }else{
                        $_SESSION['pass-not-match'] = "<div class='failed'> Pass not match </div>";
                                    header('location:'.SITEURL.'/admin/manage-admin.php');
                    }

            }else{
                //nema usera
                $_SESSION['user-not-found'] = "<div class='failed'> User not found </div>";
                header('location:'.SITEURL.'/admin/manage-admin.php');
            }
        }
    //3. proveriti da li nova sifra i kontrolna sifra se podudaraju 

    //4.upadejt sifru ako je sve true
}
?>

 <?php include('partials/footer.php');
    ?>