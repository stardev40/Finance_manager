<?php
require_once 'config.php';

$category = $_POST['category'];
$amount = $_POST['amount'];
$date = $_POST['date'];

$sql = "INSERT INTO expenses (category, amount, date) VALUES ('$category', '$amount', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Expense added successfully.";
} else {
    echo "Error adding expense: " . $conn->error;
}

$conn->close();
?>
