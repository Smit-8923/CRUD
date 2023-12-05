<?php

    $conn=mysqli_connect("localhost","root","","student");
    if($conn -> connect_error){
        die("connecrion failed");
    }
    else{
        // echo "connection pass";
    }

?>