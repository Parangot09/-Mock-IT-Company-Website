<?php
include("database.php");

$sql = "SELECT * FROM feature_cards2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($rows as $row) 
    {

        echo '<div class="card fade-in" style="width: 18rem;">
            <img src="' . $row["image_path"] . '" class="card-img-top" alt="...">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title">' . $row["title"] . '</h5>
                <p class="card-text">' . $row["description"] . '</p>
            </div>
        </div>';
    }
}
else
{
    echo '<h2> No data </h2>';
}

?>