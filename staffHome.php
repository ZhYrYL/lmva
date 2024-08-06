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
            <a href="#" class="navigation">PATIENT RECORD</a>
            <a href="dashboard.php" style="color: #22b9ec">DASHBOARD</a>
            <a href="scanqr.php">SCAN</a>
            <a href="staffInquiry.php">INQUIRY</a>
        </div>
        <div class="staffLogout">
            <a href="adminLogin.php">LOGOUT</a>
        </div>
    </div>
    <div class="staffwholebody">
        <div class="staffbody1">
            <p>DASHBOARD</p>
        </div>
        <div class="staffbody2">
            <div class="staffMiddle">
                <!-- <div class="staffh-head"></div>
                <div class="staffh-body">
                    <div class=""></div>
                        <table class="record-table">
                            <tr>
                                <td>DERM</td>
                                <td>Patient Record</td>
                                <td>Provider</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td>BS</td>
                                <td>File</td>
                                <td>Ann Agbuya</td>
                                <td>
                                    <a href="#">EDIT</a> | <a href="#">DELETE</a>
                                </td>
                            </tr>
                        
                        </table>
                    <div class=""></div>
                </div>
                <div class="staffh-footer"></div> -->
            </div>
        </div>
    </div>
    
</body>
</html>