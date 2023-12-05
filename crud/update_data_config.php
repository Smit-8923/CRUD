<?php
    include("config.php");
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $scontact = $_POST['scontact'];
    $semail = $_POST['semail'];
    $update_query = "UPDATE `mca` SET sid='{$sid}',sname='{$sname}',scontact='{$scontact}',semail='{$semail}' WHERE sid = {$sid}";
    mysqli_query($conn, $update_query);
    header("Location: index.php");
    mysqli_close($conn);
?>