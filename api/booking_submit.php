<?php
require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$properties_id = $_POST['properties_id'];
$user_id = $_POST['user_id'];

$sql = "SELECT * FROM booking WHERE phone='$phone'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!123");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "You have already Generated a token from this Number!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO booking (email, full_name, phone, property_id, `user_id`) VALUES ('$email', '$full_name', '$phone', '$properties_id', $user_id)";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!404");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Token has been Generated !!!");
echo json_encode($response);
mysqli_close($conn);
