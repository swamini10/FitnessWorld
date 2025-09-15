<?php

include 'partials/header.php';

?>
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card p-2">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    <label for="logo"> Upload Logo</label>
                    <input type="file" name="logo" id="" class="form-control">
                    <input type="submit" value="update" name="update-logo" class="btn mt-2 btn-primary">
                </form>
            </div>
            <div class="card p-2">
                <form action="" method="POST">
                    <label for="">location</label>
                    <input type="text" name="location" id="location" class="form-control">
                    <label for="">phone number</label>
                    <input type="number" name="phone" id="number" class="form-control">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                   
                    <label for="">address</label>
                    <textarea name="address" class="form-control">

                    </textarea>
                    <input type="submit" name="update-basic" value="update" class="btn mt-2s btn-primary">
                </form>
            </div>

    </div>
</div>

<?php 

include 'partials/footer.php';

?>

<?php 
include 'partials/connection.php';
if(isset($_POST['update-logo'])){
    if(isset($_FILES['logo'])){
        // print_r($_FILES)
        $file = $_FILES['logo'];    
        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileSize = $file['size'];
        $fileTmpName = $file['tmp_name'];
        $folder = "logos/";
        move_uploaded_file($fileTmpName , $folder . $fileName);
        $destination = $folder.$fileName;
        $id = 1;
        $insert = " UPDATE logo SET logo = '$destination'";
        
        // $insert = "update ";
        $exe    = mysqli_query($conn , $insert);
        if($exe){
            echo " inserted ";
        } else {
            echo "failed";
        }

    }   
} else {
    // echo "Please choose logo";
}

if(isset($_POST['update-basic']))
{
    $location = $_POST['location'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];
    $update = " UPDATE  basics SET phone_number='$phone' , email='$email' , location='$location' , address='$address'";
    echo $update;
    echo $update;
    $upda = mysqli_query($conn , $update);

    if($upda){
        echo "updated";
    } else {
        echo "failed";
    }
}


?>
