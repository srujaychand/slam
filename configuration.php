<?php 

    $conn = mysqli_connect("localhost","root", "");
    if(!$conn)
    {
        echo "Database connected". mysqli_connect_error();
    }

?>