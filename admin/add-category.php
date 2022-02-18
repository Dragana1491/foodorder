<?php include('partials/meni.php'); ?>
<div class="main-content"> 
        <div class="wrapper">
            <h1> manage category</h1> 
            <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset( $_SESSION['add']);
            }
            if(isset($_SESSION['upload'])){
                echo $_SESSION['upload'];
                unset( $_SESSION['upload']);
            }
            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <table>
        <tr>
        <td> Naziv</td>
            <td>
                <input type="text " name="title" placeholder="Ime kategorije">
            </td>
        </tr>
        <tr>
            <td>select image</td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
        <td> Prikaz</td>
            <td>
                <input type="radio" name="featured" value="yes"> DA
                <input type="radio" name="featured" value="no"> NE
            </td>
        </tr>
        <tr>
        <td>Aktivno:</td>
            <td>
            <input type="radio" name="active" value="yes"> DA
                <input type="radio" name="active" value="no"> NE
            </td>
        </tr>
        <tr> 
            <td>
            <input type="submit" name="submit" value="Dodaj kategorju">

            </td>
        </tr>
                </table>
            </form>


        </div>
    </div>
<?php
if(isset($_POST['submit'])){

    $title= $_POST['title'];

    if(isset($_POST['featured'])){
            $feature=$_POST['featured'];
    }else{
        $featured = "No";
    }

        if(isset($_POST['active'])){
                    $active=$_POST['active'];
        }else{
                $active = "No";
        }

        if(isset($_FILES['image']['name'])){
                $image_name =$_FILES['image']['name'];
                $source_path =$_FILES['image']['tmp_name'];
                $destination_path ="../images/category/".$image_name;

                $upload =move_uploaded_file($source_path, $destination_path); //ovako se uploaduje slika

                if($upload == false){
                    $_SESSION['upload'] = "<div class='failed'> Nije dodata slika </div> ";
                    header('location:'.SITEURL.'admin/add-category.php');
              die();   

            }

        }else{

            $image_name="";
        }


        $sql ="INSERT INTO category SET
        title ='$title',
        image_name='$image_name',
        featured='$featured',
        active='$active'
        ";

        $res = mysqli_query($conn, $sql);

        if($res == true){
                $_SESSION['add'] = "<div class='success'> Kategorija dodata </div> ";
                header('location:'.SITEURL.'admin/manage-category.php');
           }else{
            $_SESSION['add'] = "<div class='failed'> Nije dodata kategorija </div> ";
            header('location:'.SITEURL.'admin/add-category.php');
           }
        }






}



?>



<?php include('partials/footer.php'); ?>