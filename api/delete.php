<?php
require "../includes/database_connect.php";

if (isset($_POST['deleteToken'])) {
    $phone = $_POST['phone'];
    $sql = "DELETE FROM booking WHERE phone = $phone";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Something went wrong!123";
        return;
    }
    header("Location: ../dashboard.php");
}

if(isset($_GET['editProfile'])){
    $id = $_GET['id'];
    $full_name = $_GET['full_name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $sql = "UPDATE `users` SET `full_name`='$full_name',`phone`='$phone',`email`='$email',`gender`='$gender' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Something went wrong!@edit";
        return;
    }
    header("Location: ../dashboard.php");
}
