<?php
session_start();
require "includes/database_connect.php";

$id = $_GET["id"];
$sql_1 = "SELECT * FROM properties WHERE id = $id";

$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!456";
    return;
}
$property = mysqli_fetch_assoc($result_1);
if (!$property) {
    echo "Something went wrong!123";
    return;
}
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
    <div class="w3-padding-64 w3-content w3-text-white" id="add">
        <?php
        $property_images = glob("img/properties/" . $property['id'] . "/*");
        ?>
        <div class="property-card property-id-<?= $property['id'] ?> row" style="align-items: center; margin-left: auto; margin-right: auto; color: black">
            <div class="image-container col-md-4">
                <img src="<?= $property_images[0] ?>" />
            </div>
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name"><?= $property['name'] ?></div>
                    <div class="property-address"><?= $property['address'] ?></div>
                    <div class="property-gender">
                        <?php
                        if ($property['gender'] == "male") {
                        ?>
                            <img src="img/male.png" />
                        <?php
                        } else {
                        ?>
                            <img src="img/female.png" />
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-8">
                        <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="w3-text-light-white" id="edit-heading" style="margin-top: 50px;"> Edit Hostel </h2><br />
        <form id="edit-form" class="form" role="form" method="post" action="api/edit_submit.php">
            <input type="hidden" id="id" name="id" value="<?= $id ?>">
            <p><input class="w3-input w3-padding-16 a2" type="text" placeholder="Name Of Hostel" required name="name"></p>
            <p><input class="w3-input w3-padding-16 a2" type="text" placeholder="Address" required name="address"></p>
            <p><input class="w3-input w3-padding-16 a2" type="text" placeholder="Rent per Month" required name="rent"></p>

            <div class="form-group w3-padding-16 a2" style="text-align: center; color:black">
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
                        <input type="hidden" id="amenitie0" name="amenitie0" value="">
                        <input type="checkbox" id="amenitie0" name="amenitie0" value="cctv">
                        <label for="amenitie0">CCTV</label><br>
                        <input type="hidden" id="amenitie1" name="amenitie1" value="">
                        <input type="checkbox" id="amenitie1" name="amenitie1" value="ac">
                        <label for="amenitie1">AC</label><br>
                        <input type="hidden" id="amenitie2" name="amenitie2" value="">
                        <input type="checkbox" id="amenitie2" name="amenitie2" value="bed">
                        <label for="amenitie2">Single Sharing</label><br>
                        <input type="hidden" id="amenitie3" name="amenitie3" value="">
                        <input type="checkbox" id="amenitie3" name="amenitie3" value="double bed">
                        <label for="amenitie3">Double Sharing</label><br>
                    </div>
                    <div class="col-md-auto">
                        <input type="hidden" id="amenitie4" name="amenitie4" value="">
                        <input type="checkbox" id="amenitie4" name="amenitie4" value="dining">
                        <label for="amenitie4">Dining Hall</label><br>
                        <input type="hidden" id="amenitie5" name="amenitie5" value="">
                        <input type="checkbox" id="amenitie5" name="amenitie5" value="gym">
                        <label for="amenitie5">GYM</label><br>
                        <input type="hidden" id="amenitie6" name="amenitie6" value="">
                        <input type="checkbox" id="amenitie6" name="amenitie6" value="lift">
                        <label for="amenitie6">Lift</label><br>
                        <input type="hidden" id="amenitie7" name="amenitie7" value="">
                        <input type="checkbox" id="amenitie7" name="amenitie7" value="parking">
                        <label for="amenitie7">Parking</label><br>
                    </div>
                    <div class="col-md-auto">
                        <input type="hidden" id="amenitie8" name="amenitie8" value="">
                        <input type="checkbox" id="amenitie8" name="amenitie8" value="powerbackup">
                        <label for="amenitie8">Power Backup</label><br>
                        <input type="hidden" id="amenitie9" name="amenitie9" value="">
                        <input type="checkbox" id="amenitie9" name="amenitie9" value="washing machine">
                        <label for="amenitie9">Washing Machine</label><br>
                        <input type="hidden" id="amenitie10" name="amenitie10" value="">
                        <input type="checkbox" id="amenitie10" name="amenitie10" value="geyser">
                        <label for="amenitie10">Geyser</label><br>
                        <input type="hidden" id="amenitie11" name="amenitie11" value="">
                        <input type="checkbox" id="amenitie11" name="amenitie11" value="rowater">
                        <label for="amenitie11">RO water</label><br>
                    </div>
                    <div class="col-md-auto">
                        <input type="hidden" id="amenitie12" name="amenitie12" value="">
                        <input type="checkbox" id="amenitie12" name="amenitie12" value="tv">
                        <label for="amenitie12">TV</label><br>
                        <input type="hidden" id="amenitie13" name="amenitie13" value="">
                        <input type="checkbox" id="amenitie13" name="amenitie13" value="wifi">
                        <label for="amenitie13">WiFi</label><br>
                        <input type="hidden" id="amenitie14" name="amenitie14" value="">
                        <input type="checkbox" id="amenitie14" name="amenitie14" value="fire exit">
                        <label for="amenitie14">Fire Exit</label><br>
                        <input type="hidden" id="amenitie15" name="amenitie15" value="">
                        <input type="checkbox" id="amenitie15" name="amenitie15" value="garden">
                        <label for="amenitie15">Garden</label><br>
                    </div>
                </div>
            </div>
            <!--checkbox end-->
            <br />
            <p>
                <button class="fancy" type="submit">
                    <span class="top-key"></span>
                    <span class="text">UPDATE</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </button>
            </p>
        </form>
    </div>