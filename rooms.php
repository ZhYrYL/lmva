<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/lmva-icon.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="profile.php"><img src="img/lmva-logo.png"></a>
            </div>
            <div class="navbar">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="rooms.php" class="navigation" style="color: #FFB100">ROOMS</a>
                <a href="profileGuidelines.php" class="navigation">GUIDELINES</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>

        <div class="body">
            <form class="hotel" method="post">   
                <!----------------STANDARD ROOM--------------->
                    <div class="room1">
                        <div class="hBox1">
                            <div class="hCurImg">
                                <img src="img/Standard Room.jpg" id="currentImg">
                            </div>
                            <div class="hImgs">
                                <div class="hImg2">
                                    <img src="img/Standard Rooms1.jpg" class="smallImgs">
                                </div>
                                <div class="hImg3">
                                    <img src="img/Standard Rooms2.jpg" class="smallImgs">
                                </div>
                                <div class="hImg4">
                                    <img src="img/Standard Room3.png" class="smallImgs">
                                </div>
                            </div>
                        </div>
                        <div class="hBox2">
                            <div class="hBody">
                                <div class="hType">
                                    <div class="hType1">
                                        <h2>STANDARD ROOM</h2>
                                    </div>
                                    <div class="hType2">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <p><span class="presyo">PHP 1500 / night</span></p>
                                </div>
                                <div class="hDetails">
                                    <p>Room Size: Approximately 200 square feet</p>
                                </div>
                                <div class="hDetails">
                                    <p>Bed Type: One King Size Bed</p>
                                </div>
                                <div class="hDetails">
                                    <div>
                                        <p><span class="amneties">Breakfast</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Free Wifi</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Air Conditioning</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">+3</span></p>
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <div class="hRoomDet">
                                        <h3>Room Details</h3>
                                    </div>
                                    <div class="hBook">
                                        <a href="services.php">Book Now</a>
                                    </div>
                                </div>
                                <div class="hDescription">
                                    <p>A budget-friendly option for solo travelers or couples, this room offers simple but comfortable amenities for a pleasant stay. Room features include twin beds, nightstand, dresser, wardrobe and work desk.</p>
                                </div>
                            </div>
                            <div class="hEmpty1">
                                <img src="img/red-flag.png">
                                <p>Popular! Last booked 6 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <!----------------DELUXE ROOM--------------->

                    <div class="room1">
                        <div class="hBox1">
                            <div class="hCurImg">
                                <img src="img/Deluxe Room.jpg" id="currentImg2">
                            </div>
                            <div class="hImgs">
                                <div class="hImg2">
                                    <img src="img/deluxe room2.jpg" class="smallImgs2">
                                </div>
                                <div class="hImg3">
                                    <img src="img/deluxe room3.jpg" class="smallImgs2">
                                </div>
                                <div class="hImg4">
                                    <img src="img/deluxe room4.jpg" class="smallImgs2">
                                </div>
                            </div>
                        </div>
                        <div class="hBox2">
                            <div class="hBody">
                                <div class="hType">
                                    <div class="hType1">
                                        <h2>DELUXE ROOM</h2>
                                    </div>
                                    <div class="hType2">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <p><span class="presyo">PHP 2000 / night</span></p>
                                </div>
                                <div class="hDetails">
                                    <p>Room Size: Approximately 250 square feet</p>
                                </div>
                                <div class="hDetails">
                                    <p>Bed Type: One King Size Bed</p>
                                </div>
                                <div class="hDetails">
                                    <div>
                                        <p><span class="amneties">Breakfast</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Free Wifi</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Air Conditioning</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">+5</span></p>
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <div class="hRoomDet">
                                        <h3>Room Details</h3>
                                    </div>
                                    <div class="hBook">
                                        <a href="services.php">Book Now</a>
                                    </div>
                                </div>
                                <div class="hDescription">
                                    <p>A comfortable option for couples or business travelers, this room features a balcony view and additional amenities such as king-size bed, nightstand, dresser, wardrobe, work desk and mini-fridge</p>
                                </div>
                            </div>
                            <div class="hEmpty1">
                                <img src="img/red-flag.png">
                                <p>Popular! Last booked 4 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <!----------------SUITE ROOM--------------->
                    <div class="room1">
                        <div class="hBox1">
                            <div class="hCurImg">
                                <img src="img/suite room.png" id="currentImg3">
                            </div>
                            <div class="hImgs">
                                <div class="hImg2">
                                    <img src="img/suite room2.jpg" class="smallImgs3">
                                </div>
                                <div class="hImg3">
                                    <img src="img/suite room3.jpg" class="smallImgs3">
                                </div>
                                <div class="hImg4">
                                    <img src="img/suite room4.jpg" class="smallImgs3">
                                </div>
                            </div>
                        </div>
                        <div class="hBox2">
                            <div class="hBody">
                                <div class="hType">
                                    <div class="hType1">
                                        <h2>SUITE ROOM</h2>
                                    </div>
                                    <div class="hType2">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <p><span class="presyo">PHP 5500 / night</span></p>
                                </div>
                                <div class="hDetails">
                                    <p>Room Size: Approximately 450 square feet</p>
                                </div>
                                <div class="hDetails">
                                    <p>Bed Type: One King Size Bed, Two Twin Beds</p>
                                </div>
                                <div class="hDetails">
                                    <div>
                                        <p><span class="amneties">Breakfast</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Free Wifi</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Air Conditioning</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">+7</span></p>
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <div class="hRoomDet">
                                        <h3>Room Details</h3>
                                    </div>
                                    <div class="hBook">
                                        <a href="services.php">Book Now</a>
                                    </div>
                                </div>
                                <div class="hDescription">
                                    <p>Perfect for families or groups of friends, this room features a separate living room with a balcony view, multiple beds and amenities like air-conditioning, flat-screen TV, work desk, private bathroom, complimentary Wi-Fi and telephone</p>
                                </div>
                            </div>
                            <div class="hEmpty1">
                                <img src="img/red-flag.png">
                                <p>Popular! Last booked 12 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <!----------------EXECUTIVE ROOM--------------->
                    <div class="room1">
                        <div class="hBox1">
                            <div class="hCurImg">
                                <img src="img/Executive Rooms.jpg" id="currentImg4">
                            </div>
                            <div class="hImgs">
                                <div class="hImg2">
                                    <img src="img/executive rooms2.jpg" class="smallImgs4">
                                </div>
                                <div class="hImg3">
                                    <img src="img/executive room3.jpg" class="smallImgs4">
                                </div>
                                <div class="hImg4">
                                    <img src="img/executive room4.jpg" class="smallImgs4">
                                </div>
                            </div>
                        </div>
                        <div class="hBox2">
                            <div class="hBody">
                                <div class="hType">
                                    <div class="hType1">
                                        <h2>EXECUTIVE ROOM</h2>
                                    </div>
                                    <div class="hType2">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <p><span class="presyo">PHP 4000 / night</span></p>
                                </div>
                                <div class="hDetails">
                                    <p>Room Size: Approximately 300 square feet</p>
                                </div>
                                <div class="hDetails">
                                    <p>Bed Type: One King Size Bed</p>
                                </div>
                                <div class="hDetails">
                                    <div>
                                        <p><span class="amneties">Breakfast</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Free Wifi</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Air Conditioning</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">+6</span></p>
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <div class="hRoomDet">
                                        <h3>Room Details</h3>
                                    </div>
                                    <div class="hBook">
                                        <a href="services.php">Book Now</a>
                                    </div>
                                </div>
                                <div class="hDescription">
                                    <p>An luxury option for business travelers, this room offers private balcony view, access to executive lounge and additional amenities. Room features include king-size bed, separate seating area, flat-screen TV, dresser, wardrobe and work desk</p>
                                </div>
                            </div>
                            <div class="hEmpty1">
                                <img src="img/red-flag.png">
                                <p>Popular! Last booked 8 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <!----------------FAMILY ROOM--------------->
                    <div class="room1">
                        <div class="hBox1">
                            <div class="hCurImg">
                                <img src="img/family room.jpg" id="currentImg5">
                            </div>
                            <div class="hImgs">
                                <div class="hImg2">
                                    <img src="img/family room3.jpg" class="smallImgs5">
                                </div>
                                <div class="hImg3">
                                    <img src="img/family rooms2.jpg" class="smallImgs5">
                                </div>
                                <div class="hImg4">
                                    <img src="img/family room4.jpg" class="smallImgs5">
                                </div>
                            </div>
                        </div>
                        <div class="hBox2">
                            <div class="hBody">
                                <div class="hType">
                                    <div class="hType1">
                                        <h2>FAMILY ROOM</h2>
                                    </div>
                                    <div class="hType2">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                        <img src="img/star.png">
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <p><span class="presyo">PHP 5000 / night</span></p>
                                </div>
                                <div class="hDetails">
                                    <p>Room Size: Approximately 500 square feet</p>
                                </div>
                                <div class="hDetails">
                                    <p class="froom">Bed Type: One King Size Bed, Two Twin Beds, One Sofa Bed</p>
                                </div>
                                <div class="hDetails">
                                    <div>
                                        <p><span class="amneties">Breakfast</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Free Wifi</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">Air Conditioning</span></p>
                                    </div>
                                    <div>
                                        <p><span class="amneties">+8</span></p>
                                    </div>
                                </div>
                                <div class="hDetails">
                                    <div class="hRoomDet">
                                        <h3>Room Details</h3>
                                    </div>
                                    <div class="hBook">
                                        <a href="services.php">Book Now</a>
                                    </div>
                                </div>
                                <div class="hDescription">
                                    <p>Perfect for families with children, this room includes two separate bedrooms, a living area with balcony view, multiple beds and amenities like air-conditioning, flat-screen TV, work desk, private bathroom, complimentary Wi-Fi and telephone</p>
                                </div>
                            </div>
                            <div class="hEmpty1">
                                <img src="img/red-flag.png">
                                <p>Popular! Last booked 5 hours ago</p>
                            </div>
                        </div>
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
    
<script src="hotelReservation.js"></script>
</body>
</html>