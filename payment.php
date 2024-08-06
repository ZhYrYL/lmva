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
<div class="header">
            <div class="logo">
                <a href="profile.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="profilecontact.php" class="navigation">CONTACT</a>
                <a href="profileinquiry.php" class="navigation">INQUIRE</a>
                <a href="message.php" class="navigation" style="color: #22b9ec">MESSAGE</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>
    <div class="staffwholebody">
       
    <div class="body">
            <form class="payment" method="post" action="db/insert2.php">
                <div class="pHeading">
                    <h2>PAYMENT</h2>
                </div>
                <div class="pBody">
                    <div class="pMethod">
                        <div class="pInputs pStart">
                            <div class="pBox1" style="border: none;">
                                <p>Payment Method</p>
                            </div>
                            <div class="pBox2 pCenter" style="border: none;">
                                <img src="img/visa.png">
                                <img src="img/bdo.png">
                                <img src="img/mastercard.png">
                                <img src="img/unionbank.png">
                            </div>
                        </div>
                        <div class="pInputs pColumn">
                            <div class="pLabel">
                                <label for="cardName">Name on Card</label>
                            </div>
                            <div class="pInput">
                                <input type="text" name="cardName" id="cardName" placeholder="John Doe" class="pcardInput" required>
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pColumn">
                                <div class="pLabel">
                                    <label for="creditNum">Credit Card Number</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="creditNum" id="creditNum" placeholder="1111-2222-3333-4444" required>
                                </div>
                            </div>
                            <div class="pBox2 pColumn">
                                <div class="pLabel">
                                    <label for="expireMonth">Expiration Month</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="expireMonth" id="expireMonth" placeholder="MM" required>
                                </div>
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pColumn">
                                <div class="pLabel">
                                    <label for="expireYear">Expiration Year</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="expireYear" id="expireYear" placeholder="YY" required>
                                </div>
                            </div>
                            <div class="pBox2 pColumn">
                                <div class="pLabel">
                                    <label for="cvv">CVV Code</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="cvv" id="cvv" placeholder="123" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pEmpty"></div>
                    <div class="pSummary">
                        <div class="pInputs pStart" >
                            <p>Payment Summary</p>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>Transaction ID</p>
                            </div>
                            <div class="pBox2 pCenter">
                            123456789
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>DERM Type</p>
                            </div>
                            <div class="pBox2 pCenter">
                            BS (Blood Sample)
                            </div>
                        </div>
                        
                        
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p style="font-weight: bold">Total Cost</p>
                            </div>
                            <div class="pBox2 pCenter">
                                <p style="font-weight: bold">PHP 60000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pFooter">
                    <input type="submit" name="paynow" value="Pay Now">
                </div>
            </form>
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
    
</body>
</html>