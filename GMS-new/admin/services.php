<?php 

include 'partials/header.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div class="container mt-3">
    <form action="" method="post" enctype="multipart/form-data">
        <label for=""> Service Name </label>
        <input type="text" name="service_name" id="" class="form-control" placeholder="service name">
        <label for="" class="mt-3">  Service Photo </label>
        <input type="file" name="service_photo" id="" class="form-control ">
        <label for="" class="mt-3"> Service Price </label>
        <input type="text" name="service_price" id="" class="form-control " placeholder="service Price">
        <label for="" class="mt-3"> Service Description </label>
        <textarea class="form-control" name="service_description">
            
        </textarea>
        <input type="submit" name="post_service" value="upload" class="btn btn-primary mt-2">
    </form>
</div>

    <?php 
    include 'partials/footer.php';
    
    ?>
    
    <?php
    
    if(isset($_POST['post_service']))
    {
        $service_name = $_POST['service_name'];
        if(isset($_FILES['service_photo'])){
            $filename = $_FILES["service_photo"]["name"];
            $tempname = $_FILES["service_photo"]["tmp_name"];
            $folder = "../images/services/" . $filename;
            $folder_location = "images/services/" . $filename;
        }
        $service_price = $_POST['service_price'];
        $service_desc  = $_POST['service_description'];
        $insert = $insert = "INSERT INTO services (service_name, service_price, service_image, service_description) 
           VALUES ('$service_name', '$service_price', '$folder_location', '$service_desc')";

        $actual_insert = mysqli_query($conn , $insert);
        if($actual_insert){
           move_uploaded_file($tempname, $folder)
            ?>
            <script>
                alert(" Inserted ");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert(" failed ");
            </script>
            <?php 
        }
        
        
    }
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
