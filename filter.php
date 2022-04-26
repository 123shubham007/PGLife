<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$amenitie0 = ($_GET['amenitie0'] != '0') ? "cctv" : "0";
$amenitie1 = ($_GET['amenitie1'] != '0') ? "ac" : "0";
$amenitie2 = ($_GET['amenitie2'] != '0') ? "bed" : "0";
$amenitie3 = ($_GET['amenitie3'] != '0') ? "double bed" : "0";
$amenitie4 = ($_GET['amenitie4'] != '0') ? "dining" : "0";
$amenitie5 = ($_GET['amenitie5'] != '0') ? "gym" : "0";
$amenitie6 = ($_GET['amenitie6'] != '0') ? "lift" : "0";
$amenitie7 = ($_GET['amenitie7'] != '0') ? "parking" : "0";
$amenitie8 = ($_GET['amenitie8'] != '0') ? "powerbackup" : "0";
$amenitie9 = ($_GET['amenitie9'] != '0') ? "washing machine" : "0";
$amenitie10 = ($_GET['amenitie10'] != '0') ? "geyser" : "0";
$amenitie11 = ($_GET['amenitie11'] != '0') ? "rowater" : "0";
$amenitie12 = ($_GET['amenitie12'] != '0') ? "tv" : "0";
$amenitie13 = ($_GET['amenitie13'] != '0') ? "wifi" : "0";
$amenitie14 = ($_GET['amenitie14'] != '0') ? "fire exit" : "0";
$amenitie15 = ($_GET['amenitie15'] != '0') ? "garden" : "0";

$sql_3 = "SELECT p.id,p.name,p.address,p.gender,p.rent,a.id,a.amenitie0, a.amenitie1, a.amenitie2, a.amenitie3, a.amenitie4, a.amenitie5, a.amenitie6, a.amenitie7, a.amenitie8, a.amenitie9, a.amenitie10, a.amenitie11, a.amenitie12, a.amenitie13, a.amenitie14, a.amenitie15
            FROM amenities a
            INNER JOIN properties p
            ON a.id = p.id 
            WHERE a.amenitie0='$amenitie0' OR a.amenitie1='$amenitie1' OR a.amenitie2='$amenitie2' OR a.amenitie3='$amenitie3' OR a.amenitie4='$amenitie4' OR a.amenitie5='$amenitie5' OR a.amenitie6='$amenitie6' OR a.amenitie7='$amenitie7' OR a.amenitie8='$amenitie8' OR a.amenitie9='$amenitie9' OR a.amenitie10='$amenitie10' OR a.amenitie11='$amenitie11' OR a.amenitie12='$amenitie12' OR a.amenitie13='$amenitie13' OR a.amenitie14='$amenitie14' OR a.amenitie15='$amenitie15';";

$result_3 = mysqli_query($conn, $sql_3);
if (!$result_3) {
    echo "---Something went wrong!---";
    return;
}
$properties = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PG Life</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
    <link href="css/extra.css" rel="stylesheet" />
</head>

<body class="anim" style="color: black;">
    <?php
    include "includes/header.php";
    ?>
    <div class=" page-container">
        <?php
        foreach ($properties as $property) {

        ?>
            <div class="property-card property-id-<?= $property['id'] ?> row">
                <div class="image-container col-md-4">
                    <img src="admin/img/properties/profile<?= $property['id'] ?>.png" />
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
                        <div class="rent-container col-6">
                            <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js/property_list.js"></script>
</body>

</html>