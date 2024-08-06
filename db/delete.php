<?php
    include 'connection.php';

    if(isset($_GET['delete'])){
        $delete = mysqli_query($connection, "DELETE from registeredaccount where user_id='".$_GET['delete']."'");
        header("location: ../adminHome.php");
    }
    if(isset($_GET['deletereports'])){
        $delete = mysqli_query($connection, "DELETE from reports where ref_number='".$_GET['deletereports']."'");
        header("location: ../adminReports.php");
    }

    if(isset($_GET['deleteStaff'])){
        $delete = mysqli_query($connection, "DELETE from addinguser where staffid='".$_GET['deleteStaff']."'");
        header("location: ../adminUser.php");
    }
?>