<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<body>

<h2>Search Book by Title</h2>

<form method="POST">
    Enter Book Title: 
    <input type="text" name="search_title" required>
    <input type="submit" name="search" value="Search">
</form>

<br>

<?php
if (isset($_POST['search'])) {
    $search_title = $_POST['search_title'];

    $sql = "SELECT * FROM books WHERE title LIKE '%$search_title%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>Accession No</th>
                    <th>Title</th>
                    <th>Authors</th>
                    <th>Edition</th>
                    <th>Publisher</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['accession_no']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['authors']}</td>
                    <td>{$row['edition']}</td>
                    <td>{$row['publisher']}</td>
                 </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No book found with that title.</p>";
    }
}
?>

</body>
</html>

    