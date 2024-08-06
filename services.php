<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJLCPP Room Services</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="profile.php"><img src="img/LOGO.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" style="color: #FFB100" class="navigation">HOME</a>
                <a href="rooms.php" class="navigation">ROOMS</a>
                <a href="profileGuidelines.php" class="navigation">GUIDELINES</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>

        <div class="body">
            <form class="services" method="post">
                <div class="sHeader">
                    <h2>ROOM SERVICES</h2>
                </div>
                <div class="sBody">
                    <div class="serviceTypes">
                        <div class="serviceDes serviceRow" style="font-weight: bold;">Basic</div>
                        <div class="serviceDes">Room Cleaning</div>
                        <div class="serviceDes">Towel Replacement</div>
                        <div class="serviceDes">Linens Replacement</div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes serviceRow"><input type="radio" name="service" required><span  style="font-weight: bold;">PHP 500<span></div>
                    </div>
                    <div class="serviceTypes">
                        <div class="serviceDes serviceRow" style="font-weight: bold;">Standard</div>
                        <div class="serviceDes">Room Cleaning</div>
                        <div class="serviceDes">Towel Replacement</div>
                        <div class="serviceDes">Linens Replacement</div>
                        <div class="serviceDes">Breakfast</div>
                        <div class="serviceDes">Wifi</div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes serviceRow"><input type="radio" name="service" required><span  style="font-weight: bold;">PHP 1000<span></div>
                    </div>
                    <div class="serviceTypes">
                        <div class="serviceDes serviceRow" style="font-weight: bold;">Premium</div>
                        <div class="serviceDes">Room Cleaning</div>
                        <div class="serviceDes">Towel Replacement</div>
                        <div class="serviceDes">Linens Replacement</div>
                        <div class="serviceDes">Breakfast</div>
                        <div class="serviceDes">Wifi</div>
                        <div class="serviceDes">Laundry Service</div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes"></div>
                        <div class="serviceDes serviceRow"><input type="radio" name="service" required><span  style="font-weight: bold;">PHP 2000<span></div>
                    </div>
                    <div class="serviceTypes">
                        <div class="serviceDes serviceRow" style="font-weight: bold;">Inclusive</div>
                        <div class="serviceDes">Room Cleaning</div>
                        <div class="serviceDes">Towel Replacement</div>
                        <div class="serviceDes">Linens Replacement</div>
                        <div class="serviceDes">Breakfast</div>
                        <div class="serviceDes">Wifi</div>
                        <div class="serviceDes">Laundry Service</div>
                        <div class="serviceDes">Gym Access</div>
                        <div class="serviceDes">Pool Access</div>
                        <div class="serviceDes serviceRow"><input type="radio" name="service" required><span  style="font-weight: bold;">PHP 3000<span></div>
                    </div>
                </div>
                <div class="sFooter">
                    <a href="rooms.php">Back</a>
                    <input type="submit" name="submit" value="Next">
                </div>
            </form>
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
               <p>At the CJLPP Hotel, we're here to make booking your stay with us easy and secure. If you have any questions or concerns, please don't hesitate to contact our customer service team. 
                We're available 24/7 to assist you. We appreciate your business and look forward to welcoming you in our hotel. Thank you for choosing the CJLPP Hotel.
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
                   <p> W8MR + C4V<br> San Carlos City</p>
                </div>
            </div>

        </div>
    </div>

<?php

    if(isset($_POST['submit'])){
        echo
        "
        <script>
            document.location.href = 'accomodationForm.php';
        </script>
        ";
    }
?>
</body>
</html>