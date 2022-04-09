<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PG Life</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/property_list.css">
    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/extra.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .header {
            background-color: #fff;
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        .w3-sidebar {
            width: 105px;
            height: fit-content;
            background: #4dc7bc;
        }

        #main {
            margin-left: 120px
        }

        .margin {
            margin-top: 15px;
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }
    </style>
</head>

<body class="w3-white">
    <?php
    include "includes/header.php";
    ?>
    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white margin">
            <i class="fa fa-home w3-xlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-user w3-xlarge"></i>
            <p>ABOUT</p>
        </a>
        <a href="#add" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-building w3-xlarge"></i>
            <p>HOSTEL</p>
        </a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-envelope w3-xlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-white w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
            <a href="#add" class="w3-bar-item w3-button" style="width:25% !important">ADD</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center" style="background-color: #00000080;" id="home">
            <h1 class="w3-jumbo" style="margin-bottom: 0px;"><span class="w3-hide-small w3-text-white">Welcome To</span></h1>
            <hr style="margin-top: 0px; margin-bottom: 2rem; border-top: 2px solid #fff">
            <img src="img/logo.png" alt="boy" class="w3-image" width="992" height="1108" style="background-color: #00000080;">
        </header>

        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-white w3-padding-64" id="about">
            <h2 class="w3-text-light-white">About the Page:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p class="a1" style="padding: 20px;">Some text about PGLife.</p>
        </div><br>
        <!-- Portfolio Section -->
        <div class="w3-padding-64 w3-content w3-text-white">
            <h2 class="w3-text-light-white">Photos</h2>
            <hr style="width:200px" class="w3-opacity">

            <!-- Grid for photos -->
            <div class="w3-row-padding a1" style="margin:0 -16px;">
                <div class="w3-half">
                    <img src="img/logo.png" style="width:100%">
                    <img src="img/logo.png" style="width:100%">
                    <img src="img/logo.png" style="width:100%">
                </div>

                <div class="w3-half">
                    <img src="img/logo.png" style="width:100%">
                    <img src="img/logo.png" style="width:100%">
                    <img src="img/logo.png" style="width:100%">
                </div>
                <!-- End photo grid -->
            </div>
            <!-- End Portfolio Section -->
        </div>
        <div class="w3-padding-64 w3-content w3-text-white" id="add">
            <h2 class="w3-text-light-white" id="hostel-heading"> Hostel Added - </h2><br />
            <!-- card -->
            <?php
            //Check if user is loging or not
            if (!isset($_SESSION["user_id"])) {
            ?>
                <p class="a1" style="padding: 20px;">No Hostel Added</p>
            <?php
            } else {
                include "card.php";
            }
            ?>
            <!-- add hostel -->
            <h2 class="w3-text-light-white" id="hostel-heading" style="margin-top: 50px;"> Add Hostel </h2><br />
            <form id="hostel-form" class="form" role="form" method="post" action="api/hostel_submit.php">
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Name Of Hostel" required name="name"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Address" required name="address"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Rent per Month" required name="rent"></p>

                <div class="form-group w3-padding-16 a1" style="text-align: center;">
                    <span>Hostel for</span>
                    <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />
                    <label for="gender-male">
                        Male
                    </label>
                    <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                    <label for="gender-female">
                        Female
                    </label>
                </div>

                <h4 class="w3-text-light-white" style="padding: 10px;"> Amenities </h4>
                <!-- checkbox -->
                <div class="page-container a1" style="padding: 25px 25px;">
                    <div class="row justify-content-between">
                        <div class="col-md-auto">
                            <input type="checkbox" id="amenitie0" name="amenitie0" value="cctv">
                            <label for="amenitie0">CCTV</label><br>
                            <input type="checkbox" id="amenitie1" name="amenitie1" value="ac">
                            <label for="amenitie1">AC</label><br>
                            <input type="checkbox" id="amenitie2" name="amenitie2" value="bed">
                            <label for="amenitie2">Single Sharing</label><br>
                            <input type="checkbox" id="amenitie3" name="amenitie3" value="double bed">
                            <label for="amenitie3">Double Sharing</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="amenitie4" name="amenitie4" value="dining">
                            <label for="amenitie4">Dining Hall</label><br>
                            <input type="checkbox" id="amenitie5" name="amenitie5" value="gym">
                            <label for="amenitie5">GYM</label><br>
                            <input type="checkbox" id="amenitie6" name="amenitie6" value="lift">
                            <label for="amenitie6">Lift</label><br>
                            <input type="checkbox" id="amenitie7" name="amenitie7" value="parking">
                            <label for="amenitie7">Parking</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="amenitie8" name="amenitie8" value="powerbackup">
                            <label for="amenitie8">Power Backup</label><br>
                            <input type="checkbox" id="amenitie9" name="amenitie9" value="washing machine">
                            <label for="amenitie9">Washing Machine</label><br>
                            <input type="checkbox" id="amenitie10" name="amenitie10" value="geyser">
                            <label for="amenitie10">Geyser</label><br>
                            <input type="checkbox" id="amenitie11" name="amenitie11" value="rowater">
                            <label for="amenitie11">RO water</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="amenitie12" name="amenitie12" value="tv">
                            <label for="amenitie12">TV</label><br>
                            <input type="checkbox" id="amenitie13" name="amenitie13" value="wifi">
                            <label for="amenitie13">WiFi</label><br>
                            <input type="checkbox" id="amenitie14" name="amenitie14" value="fire exit">
                            <label for="amenitie14">Fire Exit</label><br>
                            <input type="checkbox" id="amenitie15" name="amenitie15" value="garden">
                            <label for="amenitie15">Garden</label><br>
                        </div>
                    </div>
                </div>
                <!--checkbox end-->
                <br />
                <p>
                    <?php
                    //Check if user is loging or not
                    if (isset($_SESSION["user_id"])) {
                    ?>
                        <button class="fancy" type="submit">
                            <span class="top-key"></span>
                            <span class="text">ADD To PGLife</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>
                    <?php
                    } else {
                    ?>
                        <button class="fancy" href="#" data-toggle="modal" data-target="#login-modal">
                            <span class="top-key"></span>
                            <span class="text">ADD To PGLife</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>
                    <?php
                    }
                    ?>
                </p>
            </form>
        </div>

        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-white a" id="contact">
            <h2 class="w3-text-light-white">Contact Me</h2>
            <hr style="width:200px" class="w3-opacity">

            <div class="w3-section a">
                <p><i class="fa fa-map-marker fa-fw w3-text-gray w3-xlarge w3-margin-right"></i> Dehradun, India</p>
                <p><i class="fa fa-phone fa-fw w3-text-gray w3-xlarge w3-margin-right"></i> Phone: +91 7979816961</p>
                <p><i class="fa fa-envelope fa-fw w3-text-gray w3-xlarge w3-margin-right"> </i> Email: shubhamkuar.123.sk001@mail.com</p>
            </div><br>
            <p>Let's get in touch. Send me a message:</p>

            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Message" required name="Message"></p><br />
                <p>
                    <button class="fancy" type="submit">
                        <span class="top-key"></span>
                        <span class="text"><i class="fa fa-paper-plane"></i> SEND MESSAGE</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </button>
                </p>
            </form>
            <!-- END PAGE CONTENT -->
        </div>
    </div>
    <br />
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>