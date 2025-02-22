<?php 
    include("database.php");

    $sql = "SELECT * FROM testimonials_cards";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
     {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($rows as $row)
        {
            echo'   <div class="col-md-4 mb-5 mb-md-0">
            
                    <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #9d789b;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="'.$row["image_path"].'"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4">'.$row["Name"].'</h4>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>
                            '.$row["feedback"].'
                        </p>
                    </div>
                </div>
                </div>';
        }
     }

     else
     {
        echo '<h2>No data</h2>';
     }

?>