<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']);
$property_id = $_GET["property_id"];

$sql_1 = "SELECT * FROM properties WHERE id = $property_id";

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
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/booking.css" rel="stylesheet" />
</head>

<body>

    <?php
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="property_detail.php?property_id=<?= $property['id'] ?>">
                    <?= $property['name']; ?>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                booking
            </li>
        </ol>
    </nav>
    <br />
    <br />
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form id="signup-form" class="form" role="form" method="post" action="api/booking_submit.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="full_name"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="full_name" name="full_name" placeholder="Name">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="e-mail">
                            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="address" name="address" placeholder="Address">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="State">
                                </div>
                                <div class="col-50">
                                    <label for="city">City</label>
                                    <input type="text" id="city" name="city" placeholder="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-50">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="xxxx-xxx-xxx">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="caed_name">Name on Card</label>
                            <input type="text" id="card_name" name="card_name" placeholder="Name">
                            <label for="card_number">Credit card number</label>
                            <input type="text" id="caed_number" name="card_number" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="Month">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="Year">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>