<?php
    include 'connection.php';
    //Submit Staff
    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
    $sinitial = $_POST['sinitial'];
    $snameextension = $_POST['snameextension'];
    $semail = $_POST['semail'];
    $spassword = $_POST['spassword'];

    if(isset($_POST['submitStaff'])){
        $insert = mysqli_query($connection, "INSERT INTO addinguser VALUES('','$sfname', '$slname','$sinitial','$snameextension','$semail','$spassword')");
        if($insert===TRUE){
            // echo "Registered Successfully";
            header("location: ../adminUser.php");
        }else{
            echo "Error";
        }
    }else{
        $insert = mysqli_query($connection, "UPDATE addinguser SET slname='$slname', sinitial='$sinitial', snameextension='$snameextension', 
        semail='$semail', spassword='$spassword' where sfname='$sfname'");
        if($insert===TRUE){
            //echo "Registered Successfully";
            header("location: ../adminUser.php");
        }else{
            echo "Error";
        }
    }

?>