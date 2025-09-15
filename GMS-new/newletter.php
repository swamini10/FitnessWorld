<?php
include 'partials/connection.php';
if(isset($_POST['newletter']))
{
    $email  = $_POST['email'];
    $insert = "INSERT INTO newletter (email) VALUES ('$email')";
    $query  = mysqli_query($conn , $insert);

    if($query)
    {
        ?>
        <script>
            alert(" Subscribed Successfully! ");
            window.location.href = "index.php";
        </script>
        <?php 
    } else {
        echo " failed ";
    }

} else {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php 
}

?>