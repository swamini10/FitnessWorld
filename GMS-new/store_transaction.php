<?php
include 'partials/connection.php';
// Retrieve the transaction details from the AJAX POST request
$payment_id = $_POST['payment_id'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$status = $_POST['status'];
$date = date('d-m-y');
// Set up a database connection and insert the transaction details into the transactions table

$query = "INSERT INTO transactions (payment_id, amount, currency, status) VALUES ('$payment_id', '$amount', '$currency', '$status' , '$date')";
$result = mysqli_query($conn , $query);

if ($result) {
    // Transaction successfully stored in the database
    echo "Transaction successful!";
} else {
    // Error occurred while storing the transaction in the database
    echo "Error occurred while storing the transaction in the database: ";
}
?>
