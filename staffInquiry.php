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
    <div class="stafftitle">
        <div class="staffNavbar">
            <img src="img/lmva-logo.png">
            <a href="staffHome.php" >DASHBOARD</a>
            <a href="scanqr.php">SCAN</a>
            <a href="staffInquiry.php" style="color: #22b9ec">INQUIRY</a>
        </div>
        <div class="staffLogout">
            <a href="adminLogin.php">LOGOUT</a>
        </div>
    </div>
    <div class="staffwholebody">
        <div class="staffbody1">
            <p>INQUIRIES</p>
        </div>
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
                                <small><strong>Zhyryll</strong> &emsp; <span>zhyryllposadas@gmail.com</span></small> 
                            </div>
                            <div class="subp-head">
                                <small>to me</small>
                            </div>
                        </div>
                    </div>
                    <div class="sub-msg">
                        <div class="subm-empty"></div>
                        <div class="subm-msg">
                            <small>I hope this message finds you well. I would like to request the patient record for John Doe, who visited on March 10, 2024. Could you please provide me with the necessary details and the process to obtain this record?</small><br>

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
    
</body>
</html>