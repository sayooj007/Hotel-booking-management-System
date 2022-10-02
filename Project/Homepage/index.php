<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blue Diamond</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="indexstyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/lightbox.css">
        <link rel="icon" href="logo.png" type="image/png">
    </head>
    <body>
        <section>
        <!--header-->
        <header class="header" id="header">
            <div class="head-top">
                <div class="navbar">
                    <div class="logo">
                    <a href="index.html"><img src="images/logoofficial.png" alt="Blue Diamond"></a>
                    </div>
                        <ul class = "nav">
                            <li><a href = "#header">Home</a></li>
                            <li><a href = "#services">Services</a></li>
                            <li><a href = "#rooms">Rooms</a></li>
                            <li><a href = "#gallery">Gallery</a></li>
                            <li><a href = "#about">About</a></li>
                            <li><a href = "#contact">Contact</a></li>
                            <li><a href = "http://localhost/Project/Admin/admin_login/admin_login.php">Admin Login</a></li>
                        </ul>
                        <?php
                      
                        if(isset($_SESSION['username']))
                        {
                           echo " <a href='http://localhost/Project/Customer/logout.php'><button>Logout</button></a>";
                        }
                        ?>
                       
                       <?php 
                            if(!isset($_SESSION['username'])){
                                echo " <a href='http://localhost/Project/Customer/login.php'><button>Sign In</button></a>";

                            }else{
                            echo $_SESSION['username'];
                       }
                       ?>
                    </div>
                </div>
            </div>
          <div class="head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.
                    Try our food menu, awesome services and friendly staff while you are here.</p>
                     <button type = "button" class = "head-btn">GET STARTED</button>    
            </div>
        </header>
        <!--end of header-->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class="services sec-width" id="services">
            <div class="title">
                <h2>Services</h2>
            </div>
            <div class="services-container">
                <!--single service-->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>A Food Runner is a professional who is responsible for quickly and accurately delivering orders from the kitchen to customers at the restaurant. 
                            They help Waiters and Waitresses maintain a clean environment for restaurant patrons throughout the dining experience.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Taking refreshment provides a welcome break in the day and also means we make time for the social elements of work. 
                            Having the opportunity to share a coffee will go a long way to improving mood and has a unifying effect, better able to tackle issues that arise within a team.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>Housekeeping is an important department of the hotel industry especially responsible for cleanliness, aesthetic upkeep of the rooms, maintenance, public area, back area and surroundings.
                            After cleanliness and quality of the rooms and services, a hotel solely survives on the sale of room, food, beverages and other minor amenities and services, for instance, health club, gymnasiums, relaxing spas etc.
                            Housekeeping makes your hotel experience an enjoyable one!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>Security in a hotel, or within the hospitality industry, is important because it’s a security system in place to protect staff, guests and physical resources and assets. 
                            Physical assets such as equipment, appliances, buildings, guest belongings and even the hotel grounds. Security and safety measures are crucial for a hotel. 
                            It all begins with making sure staff are knowledgeable and aware of the different measures in place to protect themselves, guests and any assets.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                    <!--end of single service-->
            </div>
        </section>


            <section class="rooms sec-width" id="rooms">
                <div class="title">
                    <h2>Rooms</h2>
                </div>
                <div class="room-conatiner">
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/Superior Room Queen.png" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>Superior Room Queen Bed</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                     22 Sq Mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 3 guests
                                </li>
                            </ul>
                            <p>Styled as urban studios, our Superior Rooms are ideal for single travellers.</p>
                                <p>Features and amenities include Queen or Twin platform beds with luxuriously upholstered headboard walls, wooden floors, custom rugs, LED TV, mini bar, tea/coffee maker, ironing kit, complimentary WiFi and access to the fitness center, pool and spa.</p>
                            <p class="rate">
                                <span>₹ 5,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/Premium Room.jpeg" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>Premium Room Queen Bed</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    22 Sq Mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 3 guests
                                </li>
                            </ul>
                            <p>Our premium rooms are urbane and sophisticated, with wooden floors, custom rugs and luxurious upholstery.</p>
                                <p>Business travellers can work and relax in comfort at the ergonomically-designed work desk. Features and amenities include Queen or Twin platform beds with plush headboard walls, LED TV, mini bar, tea/coffee maker, ironing kit, complimentary WiFi and access to the fitness center, pool and spa.</p>
                            <p class="rate">
                                <span>₹ 7,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/Executive Suite.png" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>Executive Suite</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    55 Sq. Mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 4 guests
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    2 Way Airport Transfer
                                </li>
                            </ul>
                            <p>The Executive Suites at Blue Diamond are amongst the finest in the city, offering pleasing views of the pool or leafy locality.
                                The stylish and relaxing 55 square meter space is divided into a separate living room, work area, bedroom and spacious, four fixture bathroom. 
                            </p>
                                <p>Amenities include LED TV, a fully-stocked mini bar, tea/coffee maker, ironing kit, complimentary WiFi and access to the fitness center, pool and spa.</p>
                            <p class="rate">
                                <span>₹ 10,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/Presidential Suite.jpeg" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>Presidential Suite</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    77 Sq Mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 4 guests
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    2 Way Airport Transfer
                                </li>
                            </ul>
                            <p>Our Presidential Suite offers everything to the maximum. Maximum space. Maximum pleasure. And maximum comfort.The largest suite in the hotel.
                                Each one of our suites brings you pleasure, from the moment you enter. Feel welcome amidst the smartly designed interiors with our 3-bay suites with a living area, dining area and bedroom. 
                            </p>
                                <p>Enjoy a leisurely meal and a chat at the dining table. Lose yourself in a long soak or steam in our well-equipped bathrooms. It’s just like you actually – the complete package, with its own personal, signature touch.</p>
                            <p class="rate">
                                <span>₹ 15,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/Superior Room Twin.jpeg" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>Superior Room Twin Bed</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    22 Sq Mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 3 guests
                                </li>
                            </ul>
                            <p>Styled as urban studios, our Superior Rooms are ideal for single travellers.</p>
                                <p>Features and amenities include Queen or Twin platform beds with luxuriously upholstered headboard walls, wooden floors, custom rugs, LED TV, mini bar, tea/coffee maker, ironing kit, complimentary WiFi and access to the fitness center, pool and spa.</p>
                            <p class="rate">
                                <span>₹ 8,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                    <!--single room-->
                    <article class="room">
                        <div class="room-image">
                            <img src="images/SeleQtions Suite.jpeg" alt="room image">
                        </div>
                        <div class="room-text">
                            <h3>SeleQtions Suite</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    54 Sq mt
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Complimentary WiFi
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    Up to 4 guests
                                </li>
                                <li>
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                    2 Way Airport Transfer
                                </li>
                            </ul>
                            <p>Our signature suite is one of the luxurious and most glamorous in Pune. 
                                The exquisitely-designed 54 square meter of space is divided with a separate living room, work area and bedroom; all enhanced by original artwork and custom-made furniture.</p>
                                <p>Top-of-the-line amenities include an entertainment console, ergonomic fully-wired work desk, sleek king-sized bed and plush bedding. 
                                   The luxurious bathroom has a vanity area, walk-in shower and luxurious bath amenities.</p>
                            <p class="rate">
                                <span>₹ 19,999</span>
                            </p>  
                            <button type="button" class="btn">Book Now</button>      
                        </div>
                    </article>
                    <!--end of single room-->
                </div>
            </section>

            <section class="gallerys" id="gallery">
                <DIV CLASS="sec-width">
                    <div class="title">
                        <h2>Gallery</h2>
                        </div>
                        <div class="gallery-container">
                        <div class="gallery">
                            <img src = "images/gallery1.jpeg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery2.jpeg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery3.jpeg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery4.jpeg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery5.jpeg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery6.jpg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery7.jpg" alt = "Gallery image">
                        </div>
                        <div class="gallery">
                            <img src = "images/gallery8.jpg" alt = "Gallery image">
                        </div>         
                        </div>
                    </div>
                </DIV>
            </section>
        <!--end of body content-->
                 <!--about us-->
        <section class="about sec-width" id="about">
            <div class="title">
                <h2>About Us</h2>
            </div>
            <div class="container">
                <div class="content-section">
                    <div class="content">
                        <h3>Hotel in Pune near Koregoan Park</h3>
                        <p>Blue Diamond’s curving driveway leading to the hotel’s blue facade immediately sends guests into flashback mode.
                             Blue D - as it’s affectionately known – is an integral part of many coming-of-age stories.
                             It was Pune’s first five star hotel in the Seventies, infusing the once-sleepy town with a shot of glamour.
                             For most, it was the venue of their first fine dining meal or a life-changing business deal.</p>
                        <p>As Pune blossomed into India’s smartest cities, Blue Diamond evolved into a luxury boutique hotel, while nurturing nostalgia. 
                            Global travellers feel at right at home in the contemporary urbane decor with a dramatic sky atrium, sweeping grand staircase, and sun-kissed swimming pool at our luxury hotel in Pune. 
                            Blue Diamond’s cuisine has a loyal fan base, whether it’s the regional cuisine thali served at Mystic Masala, Chinese comfort food at Whispering Bamboo, or bistro-style buffets at Latitude, the all-day diner. </p>     
                        <div class="button">
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="image-section">
                    <img src="images/sliderimage1.jpg">
                </div>
            </div>
        </section>
<!-- footer -->
<footer class = "footer">
    <div class = "footer-container">
        <div>
            <h2>Useful Links</h2>
            <a href = "#">Blog</a>
            <a href = "#">Rooms</a>
            <a href = "#">Subscription</a>
            <a href = "#">Gift Card</a>
        </div>

        <div>
            <h2>Privacy</h2>
            <a href = "#">Career</a>
            <a href = "#">About Us</a>
            <a href = "#">Contact Us</a>
            <a href = "#">Services</a>
        </div>

        <div>
            <h2>Have A Question</h2>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-map-marker-alt"></i>
                </span>
                <span>
                    203 Fake St.Mountain View, San Francisco, California, USA
                </span>
            </div>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-phone-alt"></i>
                </span>
                <span>
                    +84545 37534 48
                </span>
            </div>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-envelope"></i>
                </span>
                <span>
                    info@domain.com
                </span>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->
</section>
    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
    <script src="js/main.js"></script>
    </body>
</html>