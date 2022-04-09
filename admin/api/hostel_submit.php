<?php
require("../includes/database_connect.php");

$name = $_POST['name'];
$rent = $_POST['rent'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$amenitie0 = $_POST['amenitie0'];
$amenitie1 = $_POST['amenitie1'];
$amenitie2 = $_POST['amenitie2'];
$amenitie3 = $_POST['amenitie3'];
$amenitie4 = $_POST['amenitie4'];
$amenitie5 = $_POST['amenitie5'];
$amenitie6 = $_POST['amenitie6'];
$amenitie7 = $_POST['amenitie7'];
$amenitie8 = $_POST['amenitie8'];
$amenitie9 = $_POST['amenitie9'];
$amenitie10 = $_POST['amenitie10'];
$amenitie11 = $_POST['amenitie11'];
$amenitie12 = $_POST['amenitie12'];
$amenitie13 = $_POST['amenitie13'];
$amenitie14 = $_POST['amenitie14'];
$amenitie15 = $_POST['amenitie15'];

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
$result_1 = mysqli_query($conn, $sql);
if (!$result_1) {
    echo "Something went wrong!123---";
}

$sql_1 = "SELECT * FROM properties WHERE name = '$name'";
$result = mysqli_query($conn, $sql_1);
if (!$result) {
    echo "Something went wrong!123";
}

$id = mysqli_fetch_assoc($result);
$property_id = $id['id'];

$sql_2 = "INSERT INTO `amenities`(`id`, `amenitie0`, `amenitie1`, `amenitie2`, `amenitie3`, `amenitie4`, `amenitie5`, `amenitie6`, `amenitie7`, `amenitie8`, `amenitie9`, `amenitie10`, `amenitie11`, `amenitie12`, `amenitie13`, `amenitie14`, `amenitie15`) VALUES ('$property_id' , '$amenitie0' , '$amenitie1' , '$amenitie2' , '$amenitie3' , '$amenitie4' , '$amenitie5' , '$amenitie6' , '$amenitie7' ,  '$amenitie8' , '$amenitie9' , '$amenitie10' , '$amenitie11' , '$amenitie12' , '$amenitie13' , '$amenitie14' , '$amenitie15')";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your Hostel has been Register successfully!");
echo json_encode($response);
mysqli_close($conn);
