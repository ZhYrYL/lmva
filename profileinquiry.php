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
                <a href="profile.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="profilecontact.php" class="navigation">CONTACT</a>
                <a href="profileinquiry.php" class="navigation" style="color: #22b9ec">INQUIRE</a>
                <a href="message.php" class="navigation">MESSAGE</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>

        <div class="body">
                <form class="profileinquiry" method="POST">
                    <div class="inquire-head">
                        <div class="inquire-title">
                            <p>INQUIRE</p>
                        </div>
                        <div class="inquire-subject">
                            <div class="inquire-subject-1">
                                <div class="sub-label">
                                    <label for="">Patient Name <span style="color: red;">*</span></label>
                                </div>
                                <div class="sub-info">
                                    <input type="text" name="subject" required>
                                </div>
                            </div>
                            <div class="inquire-subject-2">
                                <div class="sub-label">
                                    <label for="">Date <span style="color: red;">*</span></label>
                                </div>
                                <div class="sub-info">
                                    <input type="date" id="start" name="start-date" value="2023-01-01" min="2024-01-01" max="2024-12-31" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inquire-body">
                        <textarea name="subject-info" id="subject-info"></textarea>
                    </div>
                    <div class="inquire-footer">
                        <input type="submit">
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
               <p>At LMVA, we're dedicated to providing seamless medical assistance services. If you have any inquiries or require assistance, our customer support team is available around the clock to help. We value your trust in us and eagerly anticipate serving you. Thank you for choosing LMVA.
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
    
</body>
</html>