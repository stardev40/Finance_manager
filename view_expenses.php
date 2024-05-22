<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Expenses</title>
</head>
<body>
    <h2>View Expenses</h2>
    <?php
    require_once 'config.php';

    $sql = "SELECT * FROM expenses";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Category: " . $row["category"]. " - Amount: $" . $row["amount"]. " - Date: " . $row["date"]. "<br>";
        }
    } else {
        echo "No expenses found.";
    }
    $conn->close();
    ?>
</body>
</html>
