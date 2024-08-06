<?php

    include 'connection.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';



    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    $insert = mysqli_query($connection, "INSERT INTO registeredaccount VALUES('','$username','$fname','$lname','$contact','$email','$password')");
    // $insertRoom = mysqli_query($connection, "INSERT INTO roompayment VALUES ('','$service',)");
    if($insert===TRUE){
        //echo "Registered Successfully";
        // header("location:../register.php");
    }else{
        echo "Error";
    }





    
    if(isset($_POST['register'])){
    
        
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lmvacompany@gmail.com';
        $mail->Password = 'vpvqdiwbtackloin';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('lmvacompany@gmail.com');
        $mail->addAddress($_POST['email']);

        $mail->isHTML(true);

        $mail->Subject = 'LMVA Verification';
        $mail->Body = '<b>Congratulations!</b> Your account has been verified. You may now proceed to login and enjoy our services<br> <a href="localhost/lmva/login.php">Click here</a>';

        $mail->send();

        echo 
        "
        <script>
            alert('Verify your account');
            document.location.href = '../register.php';
        </script>
        ";
    }
    // $checkindate = $_POST['checkindate'];
    // $checkoutdate = $_POST['checkoutdate'];
    // $number = $_POST['number'];
    // $service = $_POST['service'];
    // $roomType = $_POST['roomType'];

    // if(isset($_POST['submitForm'])){
    //     $insert = mysqli_query($connection, "INSERT INTO reports VALUES('','$checkindate', '$checkoutdate','$number','$roomType','$service')");
    //     header("location: ../payment.php");
    // }

    



    // $roomtype = $_POST['roomtype'];
    // $price = $_POST['price'];

    // if(isset($_POST['update1'])){
    //     $insert = mysqli_query($connection, "UPDATE updateroom SET price='$price' where roomtype='$roomtype'");
    //     header("location: ../adminUpdate.php");
    // }

 ?>
 