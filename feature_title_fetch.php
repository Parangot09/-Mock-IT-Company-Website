<?php 
include("database.php");

$sql = "SELECT * FROM feature_title";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
 {
    $rows = mysqli_fetch_assoc($result);

    echo "<h2 class = 'custom-font-color-blue'>". $rows["feature_title"] . "</h2>";
 }
?>