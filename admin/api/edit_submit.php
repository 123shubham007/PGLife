<?php
require("../includes/database_connect.php");

if (isset($_POST['delete'])) {
    $property_id = $_POST['property_id'];
    $sql = "DELETE FROM properties WHERE id = $property_id;";
    $result = mysqli_query($conn, $sql);
    if (!isset($result)) {
        echo "some propblem is occured";
    }
    $sql_1 = "DELETE FROM amenities WHERE id = $property_id;";
    $result_1 = mysqli_query($conn, $sql_1);
    if (!isset($result_1)) {
        echo "some propblem is occured";
    }
    $sql_2 = "DELETE FROM adminproperty WHERE properties_id = $property_id;";
    $result_2 = mysqli_query($conn, $sql_2);
    if (!isset($result_2)) {
        echo "some propblem is occured";
    }
    $sql_3 = "DELETE FROM images WHERE property_id = $property_id;";
    $result_3 = mysqli_query($conn, $sql_3);
    if (!isset($result_3)) {
        echo "some propblem is occured";
    }
    header("Location: ../admin.php");
}

$id = $_POST['id'];
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

$sql = "UPDATE `properties` SET `name`='$name',`address`='$address',`gender`='$gender',`rent`='$rent' WHERE id =$id";
$result_1 = mysqli_query($conn, $sql);
if (!$result_1) {
    echo "Something went wrong!123---$id---";
}

$sql_1 = "UPDATE `properties` SET `approve`='0' WHERE $id;";
$result = mysqli_query($conn, $sql_1);
if (!$result) {
    echo "Something went wrong!123";
}

// $id = mysqli_fetch_assoc($result);
// $property_id = $id['id'];

$sql_2 = "UPDATE `amenities` SET `amenitie0`='$amenitie0',`amenitie1`='$amenitie1',`amenitie2`='$amenitie2',`amenitie3`='$amenitie3',`amenitie4`='$amenitie4',`amenitie5`='$amenitie5',`amenitie6`='$amenitie6',`amenitie7`='$amenitie7',`amenitie8`='$amenitie8',`amenitie9`='$amenitie9',`amenitie10`='$amenitie10',`amenitie11`='$amenitie11',`amenitie12`='$amenitie12',`amenitie13`='$amenitie13',`amenitie14`='$amenitie14',`amenitie15`='$amenitie15'
         WHERE id = $id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}
header("Location: ../admin.php");
$response = array("success" => true, "message" => "Your Hostel has been Register successfully!");
echo json_encode($response);
mysqli_close($conn);
