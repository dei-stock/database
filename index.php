<html>
<body>
    <form action="delete.php" method="POST">
    Delte Customer Number: <input type="text" name="$custnumb" required><br><br>
    <input type="submit" value="Submit">

    <form action="view_single.php" method="POST">
    Select Customer Number: <input type="text" name="$custnumb" required><br><br>
    <input type="submit" value="Submit">

    <form action="db.php" method="POST">
    Customer Number: <input type="text" name="$custnumb" required><br><br>
    Customer Name: <input type="text" name="$custname" required><br><br>
    Sales Rep Number: <input type="text" name="$slsrep" required><br><br>
    Customer Address: <input type="text" name="$custaddr" required><br><br>
    Balance: <input type="text" name="$balance" required><br><br>
    Credit Limit: <input type="text" name="$credlim" required><br><br>
    <input type="submit" value="Submit">
</body>
</html>