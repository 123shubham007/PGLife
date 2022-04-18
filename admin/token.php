<?php
$user_id = $_SESSION["user_id"];
$sql_1 = "SELECT * FROM adminproperty ap INNER JOIN booking b ON ap.properties_id = b.property_id 
            WHERE ap.admin_id = $user_id;";

$result = mysqli_query($conn, $sql_1);
if (!$result) {
    echo "Something went wrong!123";
    return;
}

$booking = mysqli_fetch_all($result, MYSQLI_ASSOC);
$row_count = mysqli_num_rows($result);
?>
<div class="my-profile page-container a1" style="padding: 10px">
    <div class="col-md-auto">
        <?php
        if ($row_count != 0) {
            foreach ($booking as $user) {
        ?>
                <div class="name">
                    <p>Name: <?= $user['full_name'] ?></p>
                </div>
                <div class="email">
                    <p>Email: <?= $user['email'] ?></p>
                </div>
                <div class="phone">
                    <p>Phone No: <?= $user['phone'] ?></p>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>