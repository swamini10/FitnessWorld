<?php

include 'partials/header.php';
include 'partials/nav-bar.php';

$id = $_GET['id'];


$select_service = "SELECT * FROM services WHERE id='$id'";
$fire_service   = mysqli_query($conn , $select_service);
$ser = array();
while($services = mysqli_fetch_assoc($fire_service)){
    // print_r($services);
    $ser[] = $services;
}
// print_r($ser);
?>
<div class="container mt-2 mb-2">
    <h1> <?php echo $ser[0]['service_name'] ?> </h1>
    <img src="<?php echo $ser[0]['service_image'] ?>" alt="">
    <p><?php echo $ser[0]['service_description'] ?></p>
    <p><?php echo "₹".$ser[0]['service_price'] ?></p>
    <button class="btn btn-primary" id="rzp-button1"> Purchase </button>

</div>

<?php 

include 'partials/footer.php';

?>
<!-- payment link -->
<script>
    let money = <?php echo $ser[0]['service_price'];?>;
    console.log(money);
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>


var options = {
    "key": "rzp_test_NUkL5I24jVejsw", // Enter the Key ID generated from the Dashboard
    "amount":money * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "AFC",
    "description": "Purchase Service",
    "image": "admin/images/logo.png",

    "handler": function (response){
        var payment_id = response.razorpay_payment_id;
        var amount = response.razorpay_amount;
        var currency = response.razorpay_currency;
        var status = response.razorpay_status;
        
        // Make an AJAX call to a PHP script that inserts the transaction details into a database
        $.ajax({
            url: "store_transaction.php",
            type: "POST",
            data: {payment_id: payment_id, amount: amount, currency: currency, status: status},
            success: function(result){
                // Transaction successfully stored in the database
                console.log(result);
            },
            error: function(xhr, status, error){
                // Error occurred while storing the transaction in the database
                console.log(xhr.responseText);
            }
        });

        // Show a success message to the user
        alert("Transaction successful!");
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>