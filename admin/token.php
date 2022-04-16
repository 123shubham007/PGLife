<?php
require("../includes/database_connect.php");

$id = $_SESSION["user_id"];
$sql_1 = "SELECT * FROM adminproperty ap INNER JOIN booking b ON ap.properties_id = b.property_id WHERE ap.admin_id = $id;";

$result = mysqli_query($conn, $sql_1);
if (!$result) {
    echo "Something went wrong!123";
    return;
}

$id = mysqli_fetch_assoc($result);
$email = $id['email'];

$sql_2 = "SELECT * FROM users WHERE email = $email";
$result_1 = mysqli_query($com, $sql_2);
$user = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
$row_count = mysqli_num_rows($result_1);
if ($row_count != 0) {
    foreach ($user as $u) {
?>
        <div class="property-card property-id-<?= $u['id'] ?> row" style="align-items: center; margin-left: auto; margin-right: auto; color: black">
            <div class="content-container col-md-auto">
                <div class="detail-container">
                    <div class="property-name"><?= $u['name'] ?></div>
                    <div class="property-address"><?= $u['email'] ?></div>
                    <div class="property-gender">
                        <?php
                        if ($u['gender'] == "male") {
                        ?>
                            <img src="img/male.png" />
                        <?php
                        } else {
                        ?>
                            <img src="img/female.png" />
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-9">
                        <div class="rent">₹ <?= number_format($u['phone']) ?>/-</div>
                    </div>
                    <!-- edit hostel code -->
                    <div class="button-container col-3">
                        <button class="b" href="#" data-toggle="modal" data-target="#edit-modal">Edit</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>