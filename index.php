<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Finance Manager</title>
</head>
<body>
    <h2>Finance Manager</h2>
    <h3>Add Expense</h3>
    <form action="add_expense.php" method="POST">
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" min="0" step="0.01" required><br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        <button type="submit">Add Expense</button>
    </form>

    <h3>Expenses</h3>
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
