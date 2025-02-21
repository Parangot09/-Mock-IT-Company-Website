<?php 
session_start();
include("database.php");
$error_message = "";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = mysqli_real_escape_string($conn,$_POST["user_name"]);
    $password = $_POST["password"];

    if(empty($username) || empty($password))
    {
        $_SESSION["error_message"] = "Enter both username and password!";
        header("Location: loginpage.php");
        exit();
    }
        $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        
        if(password_verify($password,$row["password"]))
        {
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: Adminpanel.php");
            exit();
        }

        else
        {
            $_SESSION["error_message"] = "Incorrect credentials!"; 
        }
    }

    else
    {
        $_SESSION["error_message"]  = "User not found";
    } 
    
    header("Location: loginpage.php");
    exit();
}

?>