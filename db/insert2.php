<?php

    include 'connection.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

  
    if(isset($_POST['paynow'])){
    
        
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cjlpphotel@gmail.com';
        $mail->Password = 'fatwqnrhxhzmxyhd';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('cjlpphotel@gmail.com');
        $mail->addAddress('zhyryllposadas@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'Welcome to LMVA, Your account has been confirmed';
        $mail->Body = '<b>Congratulations!</b>  your account has been confirmed. We look forward to welcoming you';

        $mail->send();

        echo 
        "
        <script>
            alert('Your booking is complete! We have sent a confirmation email to the email address you provided. Please check your email for more information on your booking');
            document.location.href = '../account.php';
        </script>
        ";
    }
 ?>
 