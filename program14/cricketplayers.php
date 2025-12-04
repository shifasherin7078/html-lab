<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<h2>Indian Cricket Players</h2>

<?php
// Array of cricket players
$players = array(
    "Rohit Sharma",
    "Virat Kohli",
    "KL Rahul",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Bumrah",
    "Mohammed Shami",
    "Suryakumar Yadav",
    "Rishabh Pant"
);

echo "<table>";
echo "<tr><th>Sl.No</th><th>Player Name</th></tr>";

$sl = 1;
foreach ($players as $player) {
    echo "<tr>";
    echo "<td>$sl</td>";
    echo "<td>$player</td>";
    echo "</tr>";
    $sl++;
}

echo "</table>";
?>

</body>
</html>