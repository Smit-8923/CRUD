<?php

    include("config.php");
    $user_id=$_GET['sid'];
    // echo "$user_id"; 
    $delete_query="delete from mca where sid={$user_id}";
    mysqli_query($conn,$delete_query);
    header("Location:index.php");
    mysqli_close($conn);

?>