<?php

$conn = mysqli_connect(
    "localhost",
    "2438132",
    "Eware@507478",
    "db2438132"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies Database</title>
</head>
<body>

<h2>Movie List</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Movie Name</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Date of Release</th>
    </tr>

    <?php
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['movie_id']."</td>";
        echo "<td>".$row['movie_name']."</td>";
        echo "<td>".$row['genre']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['date_of_release']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>