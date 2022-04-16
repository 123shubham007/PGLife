<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$order = $_GET['order'];

if ($order == 1) {
    $sql_3 = "SELECT * FROM `properties` ORDER BY `properties`.`rent` ASC";
} else {
    $sql_3 = "SELECT * FROM `properties` ORDER BY `properties`.`rent` DESC";
}
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
            $property_images = glob("img/properties/" . $property['id'] . "/*");
        ?>
            <div class="property-card property-id-<?= $property['id'] ?> row">
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