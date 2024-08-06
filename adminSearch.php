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
    <title>Search Customer</title>
</head>
<body>
    <div class="adminHome">
        <div class="adminNav">
            <div class="adminLogo">
                <a href="adminHome.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="adminLinks">
                <a href="adminHome.php" class="navigation">ACCOUNTS</a>
                <a href="adminSearch.php" class="navigation" style="color: #22b9ec">SEARCH CUSTOMER</a>
                <a href="adminUser.php" class="navigation">USER</a>
                <a href="adminDerm.php" class="navigation">DERM</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminLogin.php" class="navigation">LOGOUT</a>
            </div>
        </div>
        <div class="administrator">
            <h2>SEARCH CUSTOMER</h2>
        </div>
    </div>
    <div class="adminBody">
        <form class="adminsTable" method="post">
            <div class="search">
                <input type="text" name="search-cus" placeholder="Search Record">
                <input type="submit" name="submit-cus" value="Search" class="submitCus">
            </div>
            <div class="searchTable">
                <table class="searchCustomer">
                        <tr style="font-weight: bold">
                            <td>User Id</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Contact</td>
                            <td>Email Address</td>
                        </tr>
                        <?php

                        include 'db/connection.php';
                        if(isset($_POST['submit-cus'])){
                            $select = mysqli_query($connection, "SELECT * FROM registeredaccount where user_id LIKE '%".$_POST['search-cus']."%' or fname LIKE '%".$_POST['search-cus']."%' 
                            or lname LIKE '%".$_POST['search-cus']."%' or email LIKE '%".$_POST['search-cus']."%'");
                        }else{
                            $select = mysqli_query($connection, "SELECT * FROM registeredaccount");
                        }
                        while($result=mysqli_fetch_object($select)){
                        ?>
                        <tr>
                            <td><?=$result->user_id?></td>
                            <td><?=$result->fname?></td>
                            <td><?=$result->lname?></td>
                            <td><?=$result->contact?></td>
                            <td><?=$result->email?></td>
                        </tr>

                        <?php } ?>         
                </table>
            </div>
        </form>
    </div>
    
</body>
</html>