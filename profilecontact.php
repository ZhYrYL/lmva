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
            <div class="navbar" method="post">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="contact.php" style="color: #22b9ec" class="navigation">CONTACT</a>
                <a href="profileinquiry.php" class="navigation">INQUIRE</a>
                <a href="message.php" class="navigation">MESSAGE</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>


       <div class="contact">
            <div class="contact-scroll">
                <div class="contact-pic">
                    <h1>Get in Touch with LMVA Today!</h1>
                </div>
                <div class="contact-information">
                    <div class="contact1">
                        <div class="contact-info">
                            <div class="contact-title">
                                <h1>Contact Details</h1>
                            </div>
                            <div class="contact-infos">
                                <p>lmvacompany@gmail.com</p>
                            </div>
                            <div class="contact-infos">
                                <p>Novaliches, Quezon City, Metro Manila</p>
                            </div>
                            
                        </div>
                        <div class="empty-contact"></div>
                    </div>
                    <form method="POST" class="contact2">
                        <div class="contact-input1">
                            <div class="con-name">
                                <label>Name <span style="color: red;">*</span></label>
                            </div>
                            <div class="con-wname">
                                <div class="con-fname">
                                  <input type="text" id="cfname" name="cfame" placeholder="First" required>
                                </div>
                                <div class="con-lname">
                                    <input type="text" id="clname" name="clname" placeholder="Last"required>
                                </div>
                            </div>
                        </div>
                        <div class="contact-input1">
                             <div class="con-name">
                                <label for="phone">Phone <span style="color: red;">*</span></label>
                             </div>
                            <div class="con-name-info">
                                <input type="text" name="phone" id="phone" required>
                            </div>
                        </div>
                        <div class="contact-input1">
                            <div class="con-name">
                                <label for="cemail">Email <span style="color: red;">*</span></label>
                            </div>
                            <div class="con-name-info">
                                <input type="email" name="phone" id="cemail" required>
                            </div>
                        </div>
                        <div class="contact-input2">
                            <div class="con-name">
                                <label for="comment">Comment or Message</label>
                            </div>
                            <div class="con-name-info">
                                <textarea name="comment" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="contact-input3">
                            <input id="bookNow" type="submit" name="csubmit" value="Submit">
                        </div>
                    </form>
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