<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']);
$id = $_SESSION['user_id'];
$property_id = $_GET["property_id"];

$sql_1 = "SELECT * FROM users WHERE id = $user_id";

$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!456";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!123";
    return;
}
$sql_2 = "SELECT * FROM properties WHERE id = $property_id";

$result_2 = mysqli_query($conn, $sql_2);
if (!$result_1) {
    echo "Something went wrong!456";
    return;
}
$property = mysqli_fetch_assoc($result_2);
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
            <li class="breadcrumb-item active" aria-current="page">
                <?= $property['name']; ?>
            </li>
        </ol>
    </nav>
    <br />
    <div class="row" id="login-modal" role="dialog">
        <div class="col-75" role="document">
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Create Token</h5>
                </div>
                <div class="modal-body">
                    <form id="login-form" class="form" role="form" method="post" action="api/booking_submit.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <span>I'm a</span>
                            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />
                            <label for="gender-male">
                                Male
                            </label>
                            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                            <label for="gender-female">
                                Female
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">
                                Create Token
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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