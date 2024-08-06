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
                <a href="adminSearch.php" class="navigation">SEARCH CUSTOMER</a>
                <a href="adminUser.php" style="color: #22b9ec" class="navigation">USER</a>
                <a href="adminDerm.php" class="navigation">DERM</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminLogin.php" class="navigation">LOGOUT</a>
            </div>
        </div>
        <div class="administrator">
            <h2>ADD USER</h2>
        </div>
    </div>
    <div class="adminBody">

            <?php
                
                include 'db/connection.php';
                // include 'adminUser.php';

                if(isset($_GET['edit'])){
                    $all = mysqli_query($connection, "SELECT * from addinguser where staffid= '".$_GET['edit']."' ");
                    $row = mysqli_fetch_object($all);
                }
            ?>

            <form class="adminsUserAdd" action="db/insertStaff.php" method="post">
                <div class="userHeader">
                    <p>User</p>
                </div>
                <div class="staffBody">
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="role">Role <span style="color: red;">*</span></label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="role" placeholder="Staff" disabled>
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="fname">First Name <span style="color: red;">*</span></label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="fname" name="sfname" value="<?php if(isset($_GET['edit'])){echo $row->sfname;} ?>" required>
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="lname">Last Name <span style="color: red;">*</span></label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="lname" name="slname" value="<?php if(isset($_GET['edit'])){echo $row->slname;} ?>" required>
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="initial">Middle Initial</label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="initial" name="sinitial" value="<?php if(isset($_GET['edit'])){echo $row->sinitial;} ?>">
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="extension">Extension </label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="extension" name="snameextension" value="<?php if(isset($_GET['edit'])){echo $row->snameextension;} ?>">
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="email">Email <span style="color: red;">*</span></label>
                        </div>
                        <div class="staffInfo">
                            <input type="email" id="email" name="semail" value="<?php if(isset($_GET['edit'])){echo $row->semail;} ?>" required>
                        </div>
                    </div>
                    <div class="staffInput">
                        <div class="staffLabel">
                            <label for="staffPass">Password <span style="color: red;">*</span></label>
                        </div>
                        <div class="staffInfo">
                            <input type="text" id="staffPass" name="spassword" value="<?php if(isset($_GET['edit'])){echo $row->spassword;} ?>" required>
                        </div>
                    </div>
                </div>
                <div class="userFooter">
                    <input type="submit" class="submitCus" name="<?php if(isset($_GET['edit'])){echo 'Update';}else{echo 'submitStaff';} ?>"  value="<?php if(isset($_GET['edit'])){echo 'Update';}else{echo 'Save and back';} ?>" class="submit-btn">
                    <a href="adminUser.php">Cancel</a>
                </div>
                
            </form>
    </div>
    
</body>
</html>