<?php
    include("config.php");
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $scontact = $_POST['scontact'];
    $semail = $_POST['semail'];
    $my_query = "insert into mca(sid,sname,scontact,semail) values ('{$sid}','{$sname}','{$scontact}','{$semail}')";
    mysqli_query($conn, $my_query);
    header("Location: index.php");
    mysqli_close($conn);
?>