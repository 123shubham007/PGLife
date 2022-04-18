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
        <div class="my-profile page-container a" style="padding: 50px">
            <h1>My Profile</h1>
            <div class="row">
                <div class="col-md-3 profile-img-container">
                    <i class="fas fa-user profile-img"></i>
                </div>
                <div class="col-md-9">
                    <div class="row no-gutters justify-content-between align-items-end text-bold">
                        <div class="profile">
                            <div class="name"><?= $u['full_name'] ?></div>
                            <div class="email"><?= $u['email'] ?></div>
                            <div class="phone"><?= $u['phone'] ?></div>
                        </div>
                        <div class="edit">
                            <div class="edit-profile">Edit Profile</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>