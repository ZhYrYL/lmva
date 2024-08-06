<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJLCPP Hotel</title>
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

        <?php
            include 'db/connection.php';
            $select = mysqli_query($connection, "SELECT * FROM registeredaccount");
            $result = mysqli_fetch_object($select);
        ?>

        <div class="body">
            <form class="accomodation" method="post" action="db/insert.php">
                <div class="formHeader">
                    <h2>MAKE RESERVATION</h2>
                </div>
                <div class="formBody">
                    <div class="personalInfo">
                        <div class="pInfo">
                            <p>Personal Information</p>
                        </div>
                        <div class="pForm">
                            <div class="prForm1">
                                <div class="box1">
                                    <div class="boxLabel">
                                        <label for="fname">First Name<span>*</span></label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="text" name="fname" id="fname" value="<?=$result->fname?>" disabled>
                                    </div>
                                </div>
                                <div class="box2">
                                    <div class="boxLabel">
                                        <label for="email">Email Address<span>*</span></label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="email" name="email" id="email" value="<?=$result->email?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="prForm2">
                                <div class="box1">
                                    <div class="boxLabel">
                                        <label for="lname">Last Name<span>*</span></label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="text" name="lname" id="lname"  value="<?=$result->lname?>" disabled>
                                    </div>
                                </div>
                                <div class="box2">
                                    <div class="boxLabel">
                                        <label for="phone">Phone<span>*</span></label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="tel" name="phone" id="phone"  value="<?=$result->contact?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reserveInfo">
                        <div class="rInfo">
                            <p>Reservation Information</p>
                        </div>
                        <div class="rForm">
                            <div class="prForm1">
                                <div class="box1">
                                    <div class="boxLabel">
                                        <label for="CheckinDate">Check-in Date</label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="date" class="colorBlack" name="checkindate" id="CheckinDate" required>
                                    </div>
                                </div>
                                <div class="box2">
                                    <div class="boxLabel">
                                        <label for="number">Number of Persons</label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="number" class="colorBlack" name="number" id="number" min="1" max="10">
                                    </div>
                                </div>
                            </div>
                            <div class="prForm2">
                                <div class="box1">
                                    <div class="boxLabel">
                                        <label for="CheckoutDate">Check-out Date</label>
                                    </div>
                                    <div class="boxInput">
                                        <input type="date" class="colorBlack" name="checkoutdate" id="CheckoutDate" required>
                                    </div>
                                </div>
                                <div class="box2">
                                    <div class="boxLabel">
                                        <div class="boxLabel1">
                                            <!-- <label for="service1">Service</label> -->
                                        </div>
                                        <div class="boxLabel2">
                                            <!-- <label for="roomType2">Room Type</label> -->
                                        </div> 
                                    </div>
                                    <div class="boxInput">
                                        <div class="boxInput1">
                                        <select name="service" required>
                                            <option value="" disabled selected>Services</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Inclusive">Inclusive</option>
                                        </select>
                                        </div>
                                        <div class="boxInput2">
                                            <select name="roomType" required>
                                                <option value="" disabled selected>Room Type</option>
                                                <option value="Standard Room">Standard Room</option>
                                                <option value="Deluxe Room">Deluxe Room</option>
                                                <option value="Suite Room">Suite Room</option>
                                                <option value="Executive Room">Executive Room</option>
                                                <option value="Family Room">Family Room</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formFooter">
                    <a href="services.php">Back</a>
                    <input type="submit" name="submitForm" value="Next">
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
</body>
</html>