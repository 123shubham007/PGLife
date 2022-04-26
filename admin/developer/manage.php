<?php
include "../includes/database_connect.php";

$property_id = $_POST['property_id'];

if (isset($_POST['delete'])) {
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
    header("Location: index.php");
}

if (isset($_POST['submitApproval'])) {
    $sql = "UPDATE `properties` SET `approve`='1' WHERE id = $property_id;";
    $result = mysqli_query($conn, $sql);
    if (!isset($result)) {
        echo "some propblem is occured";
    }
    header("Location: index.php");
}

if (isset($_POST['submitApproveRemove'])) {
    $sql = "UPDATE `properties` SET `approve`='0' WHERE id = $property_id;";
    $result = mysqli_query($conn, $sql);
    if (!isset($result)) {
        echo "some propblem is occured";
    }
    header("Location: index.php");
}
