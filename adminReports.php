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
    <title>Reports</title>
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
                <a href="adminDerm.php" class="navigation">DERM</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminLogin.php" class="navigation">LOGOUT</a>
            </div>
        </div>
        <div class="administrator">
            <h2>REPORTS</h2>
        </div>
    </div>
    <div class="adminBody">
        <div class="adminTable">
            <form method="post">
                <table class="adminAcc">
                    <tr style="font-weight: bold; text-align: center;">
                        <td>Reference Number</td>
                        <td>Check-in Date</td>
                        <td>Check-out Date</td>
                        <td>Number of Person</td>
                        <td>Room Type</td>
                        <td>Service</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include 'db/connection.php';
                    $select = mysqli_query($connection, "SELECT * FROM reports");
                    while($result = mysqli_fetch_object($select)){
                    ?>
                    <tr style="text-align: center;">
                        <td><?=$result->ref_number?></td>
                        <td><?=$result->checkin?></td>
                        <td><?=$result->checkout?></td>
                        <td><?=$result->numofperson?></td>
                        <td><?=$result->service?></td>
                        <td><?=$result->roomtype?></td>
                        <td class="deleteIcon"><a href="db/delete.php?deletereports=<?=$result->ref_number?>"><img src="img/garbage.png"></a></td>
                    </tr>
                    
                    <?php } ?>
                </table>
            </form>
        </div>
    </div>
    
</body>
</html>