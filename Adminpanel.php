<?php
session_start();

if (empty($_SESSION["user_id"])) {
    header("Location: loginpage.php");
    exit();
}
if (isset($_SESSION["message"])) {
    echo '<script>alert("' . $_SESSION["message"] . '")</script>';
    unset($_SESSION["message"]);
}
include("database.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "";
    if (!empty($_POST["service_title"])) {
        $title = $_POST["service_title"];
        $sql = "UPDATE services_title SET service_title = '$title'";
    } 

    else if (
        !empty($_POST["card_title"]) && !empty($_POST["card_description"]) && !empty($_POST["card_image"]) &&
        !empty($_POST["button_text"]) && !empty($_POST["button_link"])
    ) {
        $title = $_POST["card_title"];
        $description = $_POST["card_description"];
        $image = $_POST["card_image"];
        $btn_txt = $_POST["button_text"];
        $btn_lk = $_POST["button_link"];

        $sql = "INSERT INTO service_cards (title,description,image_path,button_text,button_link) 
                 VALUES ('$title','$description','$image','$btn_txt','$btn_lk')";
    } 
    
    else if (!empty($_POST["delete_card_title"])) {
        $card_title = $_POST["delete_card_title"];
        $sql = "DELETE FROM service_cards WHERE title = '$card_title'";
    }

    else if (
        !empty($_POST["fcard_title"]) && !empty($_POST["fcard_description"]) && !empty($_POST["fcard_image"])) {
        $title = $_POST["fcard_title"];
        $description = $_POST["fcard_description"];
        $image = $_POST["fcard_image"];

        $sql = "INSERT INTO feature_cards2 (title,description,image_path) VALUES ('$title','$description','$image')";
    } 

    else if (!empty($_POST["feature_title"])) {
        $title = $_POST["feature_title"];
        $sql = "UPDATE feature_title SET feature_title = '$title'";
    } 


    if (!empty($sql)) {
        $query = mysqli_query($conn, $sql);

        if ($query) {
            $_SESSION["message"] = "Updation successfull";
        }
        header("Location: Adminpanel.php");
    } else {
        $_SESSION["message"] = "Failed updation! Make sure all fields are filled";
        header("Location: Adminpanel.php");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfoZen Adminpanel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/customstyles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>
                        <h2 class="custom-font-color-white">InfoZen Admin Panel</h2>
                    </li>
                    <li class="nav-item ms-5">
                        <a href="logout.php"><button type="button" class="btn btn-secondary">logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex flex-wrap my-5 justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title custom-font-color-blue">Change services title</h5>
                <label for="exampleFormControlTextarea1" class="form-label">Enter new title</label>
                <form action="adminpanel.php" method="post">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="service_title"
                        rows="2"></textarea>
                    <button type="submit" class="btn btn-primary my-3">Change title</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-wrap my-5 justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title custom-font-color-blue">Add a Service card</h5>
                <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                <form action="adminpanel.php" method="post">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="card_title"
                        rows="1"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="card_description"
                        rows="2"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Image path</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="card_image"
                        rows="1"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Button text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="button_text"
                        rows="1"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Button link</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="button_link"
                        rows="1"></textarea>
                    <button type="submit" class="btn btn-primary my-3">Add Card</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-wrap my-5 justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title text-danger">Delete Service Card</h5>
                <label for="exampleFormControlTextarea1" class="form-label">Enter Card title</label>
                <form action="adminpanel.php" method="post">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="delete_card_title"
                        rows="2"></textarea>
                    <button type="submit" class="btn btn-danger my-3">Delete Card</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-wrap my-5 justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title custom-font-color-blue">Change Features title</h5>
                <label for="exampleFormControlTextarea1" class="form-label">Enter new title</label>
                <form action="adminpanel.php" method="post">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="feature_title"
                        rows="2"></textarea>
                    <button type="submit" class="btn btn-primary my-3">Change title</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-wrap my-5 justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-body shadow-sm p-3">
                <h5 class="card-title custom-font-color-blue">Add a Feature card</h5>
                <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                <form action="adminpanel.php" method="post">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="fcard_title"
                        rows="1"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="fcard_description"
                        rows="2"></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Image path</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="fcard_image"
                        rows="1"></textarea>
                    <button type="submit" class="btn btn-primary my-3">Add Card</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>