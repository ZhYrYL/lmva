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
    <title>DERM</title>
</head>
<body>
    <div class="adminHome">
        <div class="adminNav">
            <div class="adminLogo">
                <a href="adminHome.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="adminLinks">
                <a href="adminHome.php" class="navigation">ACCOUNTS</a>
                <a href="adminSearch.php" class="navigation">SEARCH CUSTOMER</a>
                <a href="adminUser.php" class="navigation">USER</a>
                <a href="adminDerm.php" class="navigation"  style="color: #22b9ec">DERM</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminLogin.php" class="navigation">LOGOUT</a>
            </div>
        </div>
        <div class="administrator">
            <h2>DERM</h2>
        </div>
    </div>
    <div class="adminBody">
            <form class="adminsUserAdd" method="post">
                <div class="userHeader">
                    <div class="userAdding">
                        <a href="adminAddDerm.php">+ Add DERM</a>
                    </div>
                    <div class="userSearch">
                        <input type="text" name="search-staff" placeholder="Search..">
                        <input type="submit" name="submit-staff" value="Search" class="submitCus">
                    </div>
                </div>
                <div class="userBody">
                    <table class="adminAcc">
                        <tr style="font-weight: bold; text-align: center;">
                            <td>DERM</td>
                            <td>QR Code</td>
                            <td>Action</td>
                        </tr>

                        <?php
                        include 'db/connection.php';

                       
                        ?>
                        <tr style="text-align: center;">
                            <td>DERM</td>
                            <td>
                                <?php
                                    // require_once 'connection.php';
                                    require_once 'phpqrcode/qrlib.php';
                                    $path = 'img/qrimages/';
                                    $qrcode = $path.time().".png";
                                    // $qrimage = time().".png";

                                    QRcode :: png("Zhyryll", $qrcode, 'H', 4, 4);
                                    echo "<img src='".$qrcode."'>";
                                ?>
                            </td>
                            <td class="staffAction">
                                <a href="#">Print QR Code</a>
                            </td>
                        </tr>
                   
                    </table>
                </div>
                <div class="userFooter"></div>
                
            </form>
    </div>
    
</body>
</html>