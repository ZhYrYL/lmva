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
    
    <div class="adminHome">
        <div class="adminNav">
            <div class="adminLogo">
                <a href="adminHome.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="adminLinks">
                <a href="adminHome.php" class="navigation">ACCOUNTS</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminSearch.php" class="navigation">SEARCH CUSTOMER</a>
                <a href="adminUpdate.php" class="navigation" style="color: #22b9ec">UPDATE</a>
                <a href="adminLogin.php"><img src="img/power-off.png"></a>
            </div>
        </div>
        <div class="administrator">
            <h2>UPDATE</h2>
        </div>
    </div>
    <div class="adminBody">
        <form class="adminUpdate" method="POST" action="db/insert3.php">
            <div class="adminRoom">
                <div>
                    <table>
                        <tr>
                            <td>Room Type</td>
                            <td>Price Per Night</td>
                            <td>Action</td>
                        </tr>
                        <?php
                            include 'db/connection.php';
                            $select = mysqli_query($connection, "SELECT * FROM updateroom");
                            while($result=mysqli_fetch_object($select)){
                        ?>
                        <tr>
                            <td><input type="text" name="roomtype" value="<?=$result->roomtype?>"></td>
                            <td><input type="text" name="price" value="<?=$result->price?>"></td>
                            <td><input type="submit" name="update1" value="Update"></td>
                        </tr>
                       
                        <?php } ?>
                        
                    </table>
                </div>
            </div>
            
            <div class="adminService">
                <div>
                    <table>
                        <tr>
                            <td>Service</td>
                            <td>Price</td>
                            <td>Action</td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>