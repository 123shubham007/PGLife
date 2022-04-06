<!DOCTYPE html>
<html>

<head>
    <title>PG Life</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/common.css">
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
            <i class="fa fa-plus w3-xlarge"></i>
            <p>ADD</p>
        </a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-envelope w3-xlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
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
            <h1 class="w3-jumbo" style="margin-bottom: 0px;"><span class="w3-hide-small">Welcome To</span></h1>
            <hr style="margin-top: 0px; margin-bottom: 2rem; border-top: 2px solid #fff">
            <img src="img/logo.png" alt="boy" class="w3-image" width="992" height="1108" style="background-color: #32323280;">
        </header>

        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-black w3-padding-64 a" id="about">
            <h2 class="w3-text-light-black">About the Page:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Some text about PGLife.</p>
        </div><br>
        <!-- Portfolio Section -->
        <div class="w3-padding-64 w3-content">
            <h2 class="w3-text-light-black">Photos</h2>
            <hr style="width:200px" class="w3-opacity">

            <!-- Grid for photos -->
            <div class="w3-row-padding a" style="margin:0 -16px">
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

        <div class="w3-padding-64 w3-content" id="add">
            <h2 class="w3-text-light-black a"> Add Hostel </h2>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Name Of Hostel" required name="Name"></p>
                <p><input class="w3-input w3-padding-16 a1" type="text" placeholder="Address" required name="Address"></p>
                <p><input class="w3-input w3-padding-16 a1" type="number" placeholder="Rent per Month" required name="Price"></p>

                <div class="form-group w3-padding-16 a">
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

                <h4 class="w3-text-light-black"> Ameties </h4>
                <!--checkbox-->
                <div class="page-container a1" style="padding: 25px 25px;">
                    <div class="row justify-content-between">
                        <div class="col-md-auto">
                            <input type="checkbox" id="ameties[0]" name="ameties[0]" value="cctv">
                            <label for="ameties[0]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[1]" value="cctv">
                            <label for="ameties[1]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[2]" value="cctv">
                            <label for="ameties[2]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[3]" value="cctv">
                            <label for="ameties[3]">CCTV</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="ameties[0]" name="ameties[4]" value="cctv">
                            <label for="ameties[4]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[5]" value="cctv">
                            <label for="ameties[5]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[6]" value="cctv">
                            <label for="ameties[6]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[7]" value="cctv">
                            <label for="ameties[7]">CCTV</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="ameties[0]" name="ameties[8]" value="cctv">
                            <label for="ameties[8]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[9]" value="cctv">
                            <label for="ameties[9]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[10]" value="cctv">
                            <label for="ameties[10]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[11]" value="cctv">
                            <label for="ameties[11]">CCTV</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="checkbox" id="ameties[0]" name="ameties[12]" value="cctv">
                            <label for="ameties[12]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[13]" value="cctv">
                            <label for="ameties[13]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[14]" value="cctv">
                            <label for="ameties[14]">CCTV</label><br>
                            <input type="checkbox" id="ameties[0]" name="ameties[15]" value="cctv">
                            <label for="ameties[15]">CCTV</label><br>
                        </div>
                    </div>
                    <!--checkbox end-->
                </div>
                <br />
                <p>
                    <button class="fancy" type="submit">
                        <span class="top-key"></span>
                        <span class="text">ADD To PGLife</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </button>
                </p>
            </form>
        </div>

        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-black a" id="contact">
            <h2 class="w3-text-light-black">Contact Me</h2>
            <hr style="width:200px" class="w3-opacity">

            <div class="w3-section a">
                <p><i class="fa fa-map-marker fa-fw w3-text-gray w3-xlarge w3-margin-right"></i> Dehradun, India</p>
                <p><i class="fa fa-phone fa-fw w3-text-gray w3-xlarge w3-margin-right"></i> Phone: +91 7979816961</p>
                <p><i class="fa fa-envelope fa-fw w3-text-gray w3-xlarge w3-margin-right"> </i> Email: shubhamkuar.123.sk001@mail.com</p>
            </div><br>
            <p class="a">Let's get in touch. Send me a message:</p>

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
    include "includes/footer.php";
    ?>

</body>

</html>