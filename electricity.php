<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Units Consumed:
    <input type="number" name="units" required>
    <input type="submit" value="Calculate">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {

    $units = $_POST["units"];
    $bill = 0;

    // Calculation
    if ($units <= 100) {
        $bill = $units * 5;
    }
    elseif ($units <= 200) {
        $bill = (100 * 5) + (($units - 100) * 7);
    }
    elseif ($units <= 300) {
        $bill = (100 * 5) + (100 * 7) + (($units - 200) * 10);
    }
    else {
        $bill = (100 * 5) + (100 * 7) + (100 * 10) + (($units - 300) * 15);
    }

    echo "<h3>Total Electricity Bill: ₹ $bill</h3>";
}

?>

</body>
</html>
