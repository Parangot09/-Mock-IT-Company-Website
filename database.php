<?php 
    $db_server = "127.0.0.1";
    $db_name = "infozen";
    $username = "root";
    $pass = "";
    $conn = "";

   try
   {
    $conn = mysqli_connect(
        $db_server,
        $username,
        $pass,
        $db_name
      );
   }

   catch(mysqli_sql_exception)
   {
    echo "Error connecting to database!";
   }

?>