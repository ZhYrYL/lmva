<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMVA</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="navbar">
                <a href="home.php" style="color: #22b9ec" class="navigation">HOME</a>
                <a href="contact.php" class="navigation">CONTACT</a>
                <a href="login.php" class="navigation">LOGIN</a>
                <a href="register.php" class="navigation">REGISTER</a>
            </div>
        </div>

        <div class="body">
            <div class="title">
                <div class="welcome">
                    <h1>Your trusted medical assistance with LMVA</h1>
                </div>
                <div class="booknow">
                    <a id="bookNow">Contact Us</a>
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
               <p>At LMVA, we're dedicated to providing seamless medical assistance services. If you have any inquiries or require assistance, our customer support team is available around the clock to help. We value your trust in us and eagerly anticipate serving you. Thank you for choosing LMVA
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
    </div>

    <script>
        document.getElementById("bookNow").onclick = function book(){
        alert("Inquiring requires a registered account, please login or sign up");
    }
    </script>
</body>
</html>