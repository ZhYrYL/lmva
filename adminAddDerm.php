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
    <title>ADD DERM</title>
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
                <a href="adminDerm.php" class="navigation" style="color: #22b9ec">DERM</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminLogin.php" class="navigation">LOGOUT</a>
            </div>
        </div>
        <div class="administrator">
            <h2>DERM</h2>
        </div>
    </div>
    <div class="adminBodyDerm">
        <form class="addDerm" method="post" action="adminDerm.php">
            <div class="dermbody">
                <div class="dermlabel">
                    <p>ADD DERM</p>
                </div>
                <div class="derminput">
                    <select id="dropdown" name="qrderm" required>
                        <option disabled selected>DERM</option>
                        <option value="BS">BS</option>
                        <option value="NC">NC</option>
                        <option value="JC">JC</option>
                        <option value="AN">AN</option>
                        <option value="JB">JB</option>
                        <option value="AT">AT</option>
                        <option value="JG">JG</option>
                        <option value="AG">AG</option>
                        <option value="SL">SL</option>
                        <option value="SP">SP</option>
                        <option value="VB">VB</option>
                    </select>
                </div>
            </div>
            <div class="dermfooter">
                <input type="submit" class="submitCus" name="generateQR" value="Generate QR Code" class="submit-btn">
                <a href="adminDerm.php">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
