<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            transition: 5s;

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
    <title>Administrator Login</title>
</head>
<body>
        <form class="adminLog" method="POST">
            <div class="adHeader">
                <img src="img/lmva-logo.png">
            </div>
            <div class="adBody">
                <div class="wel">
                    <div class="welPanel">
                        <h3>ADMIN PANEL</h3>
                    </div>
                    <div class="welDes">
                        <p id="alert">Control panel login</p>
                    </div>
                </div>
                <div class="user">
                    <div  class="userLabel">
                        <label for="username">Username</label>
                    </div>
                    <div  class="userInput">
                        <input type="email" id="username" name="email">
                    </div>
                </div>
                <div class="pass">
                    <div  class="passLabel">
                        <label for="password">Password</label>
                    </div>
                    <div  class="passInput">
                        <input type="password" id="password" name="password">
                    </div>
                </div>
            </div>
            <div class="adFooter">
                <input type="submit" value="Login" name="submit" onclick="admin()">
            </div>
        </form>

        <?php
        include 'db/connection.php';
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = mysqli_query($connection, "SELECT * FROM addinguser where semail='$email' and spassword='$password'");
            $count = mysqli_num_rows($result);
            if($count>0){
                echo 
                "
                <script>
                    alert('Welcome to LMVA!');
                    document.location.href = 'staffHome.php';
                </script>
                ";
            }else{
                echo 
                "
                <script>
                    var alert = document.getElementById('alert');

                    document.getElementById('username').style.border = '2px solid red';
                    document.getElementById('password').style.border = 'px solid red';
                    alert.innerHTML = 'Invalid login credentials';
                    alert.style.color = 'red';
                </script>
                ";
            }
        }
    ?>
    
<!-- <script>
    var adminUser = "admin";
    var adminPass = "admin";
    var alert = document.getElementById("alert");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    const admin = () => {
        if(username.value===adminUser && password.value === adminPass){
            document.location.href= 'adminHome.php';
        }else{
            document.getElementById("username").style.border = "2px solid red";
            document.getElementById("password").style.border = "2px solid red";
            alert.innerHTML = "Invalid login credentials";
            alert.style.color = "red";
        }
    }
</script> -->
</body>
</html>