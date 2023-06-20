<?php 
session_start();
require 'func.php';

$muncul = tampil("SELECT * FROM bukti") ; 




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Dz Property</title>
</head>

<body>
    <header>
        <nav>
            <h4><i class="bi bi-house-door-fill"></i> Property</h4>
            <div class="right_bx">
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#"><i class="bi bi-globe"></i> Language</a></li>
                    <li><a href="#">List Your Property</a></li>
                </ul>



                <?php if(!isset($_SESSION['sess'])):?>
                    <a href="signup.php"> <button class="Btn">
                        Signup
                        <i class="fa-regular fa-user" style="color: #ffffff;"></i>
                        </button></i></a>
                    <?php endif; ?>

                    
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="cont_bx">
                <h1>Modren <br> house</h1>
                <br><br><br><br><br><br>
                <p>
                    Buy and acquire property yourself ! </p>
                <!-- <div class="weather">
                    <h6>36 °C <span>Hot</span></h6>
                </div> -->
                <!-- <div class="btns_cont">
                    <i class="bi bi-arrow-left" id="btn_left"></i>
                    <i class="bi bi-arrow-right" id="btn_right"></i>
                </div> -->
                
                <div class="images_bx">
                    <div class="card">
                        <img src="img/An outdoor pool.jpg" alt="">
                    </div>
                    <div class="card">
                        <img src="img/(6x7 Meters) Small House Design Idea with 3 Bedrooms.jpg" alt="">
                    </div>
                    <div class="card">
                        <img src="img/Random Inspiration 335.jpg" alt="">
                        <h6 id="h6">+6</h6>
                    </div>
                </div>
            </div>
    </header>
    <div class="map">
    </div>

    <div class="home">
        <div class="title_button">
            <h2>Click the picture for confirm the location <br>
                and go to the next step .
            </h2>
            
            <a href="#">
            <button>See All <i class="bi bi-arrow-right"></i></button>
            </a>
        </div>

        <div class="home_bx">
            <div class="card">
                <a href="payment.php">
                <img src="img/home1.png" alt="">
                <div class="content">
                    <i class="bi bi-balloon-heart"></i>
                    <div class="cont">
                        <h4>Dubai</h4>
                        <p>United Arb Emirates</p>
                    </div>
                </div>
            </div>
            </a>
            <div class="card">
                <a href="payment.php">
                <img src="img/A maison de passe interior design.jpg" alt="">
                <div class="content">
                    <i class="bi bi-balloon-heart"></i>
                    <div class="cont">
                        <h4>Abu Dhabi</h4>
                        <p>United Arb Emirates</p>
                    </div>
                </div>
            </div>
            </a>
            <div class="card">
                <a href="payment.php">
                <img src="img/Butterfly Beach by Maienza-Wilson Interior Design + Architecture.jpg" alt="">
                <div class="content">
                    <i class="bi bi-balloon-heart"></i>
                    <div class="cont">
                        <h4>Bogor</h4>
                        <p>West Java, Indonesia
                        </p>
                    </div>
                </div>
            </div>
            </a>
            <div class="card">
                <a href="payment.php">
                <img src="img/Warm elegance defining Franco Residence in Golden Beach.jpg" alt="">
                <div class="content">
                    <i class="bi bi-balloon-heart"></i>
                    <div class="cont">
                        <h4>Senayan City</h4>
                        <p>Jakarta, Indonesia</p>
                    </div>                
                </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    </a>
    <section>
        <h2>Our Service</h2>
        <div class="box">
            <div class="img_bx">
                <img src="img/317e7c5f5d69514a14d0168bdf266a7f.jpg" alt="">
            </div>
            <div class="cont_box">
                <h6><span>OUR SERVICE</span></h6>
                <h1>Comfort is our <br> Top Priority for you</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo minus ab porro id expedita facilis repudiandae dolorum maxime reprehenderit sit?</p>
                <ul>
                    <li>Pramium natinal markting</li>
                    <li>Manged viowing</li>
                    <li>Frco, no obligation valuctions</li>
                    <li>Local area knowladge</li>
                </ul>
            </div>
        </div>
    </section>
    

    <footer>
<h4><i class="bi bi-house-door-fill"></i> Property</h4>
<p> 
    &copy; 2023 Dz Property. All rights reserved.</p>
</footer>

    
</body>

</html>