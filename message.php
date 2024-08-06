<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <style>
        body{
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-size: cover;
            background-position: center;
            animation-name: animate;
            animation-direction: alternate-reverse;
            animation-duration: 30s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-play-state: running;
            animation-timing-function: ease-in-out;
        }
        @keyframes animate{
            0%{
                background-image: url(./img/lmvapic1.jpg);
            }
            20%{
                background-image: url(./img/lmvapic2.jpg);
            }
            40%{
                background-image: url(./img/lmvapic3.jpg);
            }
            60%{
                background-image: url(./img/lmvapic1.jpg);
            }
            80%{
                background-image: url(./img/lmvapic2.jpg);
            }
            100%{
                background-image: url(./img/lmvapic3.jpg);
        }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
            <div class="logo">
                <a href="profile.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="profilecontact.php" class="navigation">CONTACT</a>
                <a href="profileinquiry.php" class="navigation">INQUIRE</a>
                <a href="message.php" class="navigation" style="color: #22b9ec">MESSAGE</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>
    <div class="staffwholebody">
       
        <div class="staffbody2">
            <div class="staffMiddle">
                <div class="inquire-head">
                    <div class="ih-title">
                        <p>Patient Record</p>
                    </div>
                    <div class="ih-print">
                        <a href="#">Print</a>
                    </div>
                </div>
                <div class="inquire-msg">
                    <div class="sub-mail">
                        <div class="sub-profile">
                            <img src="./img/profile-user.png" alt="Profile">
                        </div>
                        <div class="sub-nav">
                            <div class="subp-nav">
                                <small><strong>Staff</strong> &emsp;</small> 
                            </div>
                            <div class="subp-head">
                                <small>to me</small>
                            </div>
                        </div>
                    </div>
                    <div class="sub-msg">
                        <div class="subm-empty"></div>
                        <div class="subm-msg">
                            <small>Dear Zhyryll,</small><br>
                            <small>I have located the patient record for John Doe, dated March 10, 2024. You can proceed with accessing the record by completing the payment process.</small><br>
                            <small>Please click on the following link to proceed with payment: <a href="payment.php">Payment Link</a></small><br>

                            

                            <small>
                                Thank you for your assistance.
                            </small>

                        </div>
                    </div>
                </div>
                <div class="inquire-reply">
                    <input type="submit" name="inquiry" value="Reply">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
            <div class="discover">
                <div class="label">Discover</div>
                <div class="link">
                    <ul>
                        <li>Accomodations</li>
                        <li>Services</li>
                        <li>Activities</li>
                    </ul>
                </div>
            </div>
            <div class="book">
                <div class="label">Book</div>
                <div class="link">
                    <ul>
                        <li>Reservations</li>
                        <li>Specials & Packages</li>
                    </ul>
                </div>
            </div>
            <div class="message">
               <p>At LMVA, we're dedicated to providing seamless medical assistance services. If you have any inquiries or require assistance, our customer support team is available around the clock to help. We value your trust in us and eagerly anticipate serving you. Thank you for choosing LMVA.
               </p>
            </div>
            <div class="stay">
                <div class="label">Stay</div>
                <div class="link">
                    <ul>
                        <li>Guidelines</li>
                        <li>Contact us</li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
            <div class="location">
                <div class="label">Location</div>
                <div class="link">
                    <p> Novaliches, Quezon City<br> Metro Manila</p>
                </div>
            </div>

        </div>
    
</body>
</html>