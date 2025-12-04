<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Book Information</h2>

<form method="POST">
    Accession Number: <input type="text" name="accession" required><br><br>
    Title: <input type="text" name="title" required><br><br>
    Authors: <input type="text" name="authors" required><br><br>
    Edition: <input type="text" name="edition" required><br><br>
    Publisher: <input type="text" name="publisher" required><br><br>

    <input type="submit" name="submit" value="Add Book">
</form>

<?php
if (isset($_POST['submit'])) {
    $acc = $_POST['accession'];
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = "INSERT INTO books (accession_no, title, authors, edition, publisher)
            VALUES ('$acc', '$title', '$authors', '$edition', '$publisher')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Book added successfully!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

</body>
</html>