<?php
require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$address = $_POST['address'];

// $card_number = $_POST['card_number'];
// $card_name = $_POST['card_name'];
// $expmonth = $_POST['expmonth'];
// $expyear = $_POST['expyear'];
// $cvv = $_POST['cvv'];
// $cvv = sha1($cvv);

$sql = "SELECT * FROM booking WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!123");
    echo json_encode($response);
    return;
}

// $row_count = mysqli_num_rows($result);
// if ($row_count != 0) {
//     $response = array("success" => false, "message" => "This email id is already registered with us!");
//     echo json_encode($response);
//     return;
// }

$sql = "INSERT INTO booking (email, full_name, city, state, phone, address, zip) VALUES ('$email', '$full_name', '$city', '$state', '$phone', '$address', '$zip')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Payment has been done !!!");
echo json_encode($response);
mysqli_close($conn);
