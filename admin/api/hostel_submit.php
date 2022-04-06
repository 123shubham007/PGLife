<?php
require("../includes/database_connect.php");

$name = $_POST['name'];
$rent = $_POST['rent'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$amenitie[0] = $_POST['amenitie[0]'];
$amenitie[1] = $_POST['amenitie[1]'];
$amenitie[2] = $_POST['amenitie[2]'];
$amenitie[3] = $_POST['amenitie[3]'];
$amenitie[4] = $_POST['amenitie[4]'];
$amenitie[5] = $_POST['amenitie[5]'];
$amenitie[6] = $_POST['amenitie[6]'];
$amenitie[7] = $_POST['amenitie[7]'];
$amenitie[8] = $_POST['amenitie[8]'];
$amenitie[9] = $_POST['amenitie[9]'];
$amenitie[10] = $_POST['amenitie[10]'];
$amenitie[11] = $_POST['amenitie[11]'];
$amenitie[12] = $_POST['amenitie[12]'];
$amenitie[13] = $_POST['amenitie[13]'];
$amenitie[14] = $_POST['amenitie[14]'];
$amenitie[15] = $_POST['amenitie[15]'];

$sql = "SELECT * FROM properties WHERE name='$name'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!123");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This Hostel had already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO `properties`(`name`, `address`, `gender`, `rent`) VALUES ('$name','$address','$gender','$rent')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo json_encode("Something went wrong!");
    return;
}

$sql_2 = "SELECT * FROM properties WHERE name = '$name'";
$id = $result['id'];

$sql_1 = "INSERT INTO `amenities`(`id`,`amenitie[0]`, `amenities[1]`, `amenities[2]`, `amenities[3]`, `amenities[4]`, `amenities[5]`, `amenities[6]`, `amenities[7]`, `amenities[8]`, `amenities[9]`, `amenities[10]`, `amenities[11]`, `amenities[12]`, `amenities[13]`, `amenities[14]`, `amenities[15]`) 
        VALUES 
        ('$id' , '$amenitie[0]' , '$amenitie[1]' , '$amenitie[2]' , '$amenitie[3]' , '$amenitie[4]' , '$amenitie[5]' , '$amenitie[6]' , '$amenitie[7]' , '$amenitie[8]' , '$amenitie[9]' , '$amenitie[10]' , '$amenitie[11]' , '$amenitie[12]' , '$amenitie[13]' , '$amenitie[14]' , '$amenitie[15]')";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your Hostel has been Register successfully!");
echo json_encode($response);
mysqli_close($conn);
