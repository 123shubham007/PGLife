<?php
$sql_1 = "SELECT * FROM properties";

$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!123";
    return;
}
$properties = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
$row_count = mysqli_num_rows($result_1);
if ($row_count != 0) {
    foreach ($properties as $property) {
?>
        <div class="property-card property-id-<?= $property['id'] ?> row" style="align-items: center; margin-left: auto; margin-right: auto; color: black">
            <div class="image-container col-md-4" style="margin: auto;">
                <img src="../admin/img/properties/profile<?= $property['id'] ?>.png" />
            </div>
            <div class="content-container col-md-8">
                <div class="row no-gutters">
                    <div class="detail-container col-9">
                        <div class="property-name"><?= $property['name'] ?></div>
                        <div class="property-address"><?= $property['address'] ?></div>
                        <div class="property-gender">
                            <?php
                            if ($property['gender'] == "male") {
                            ?>
                                <img src="../img/male.png" />
                            <?php
                            } else {
                            ?>
                                <img src="img/female.png" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="button-container col-3">
                        <?php
                        if ($property['approve'] == 1) {
                        ?>
                            <img src="../img/approve.gif" style="width:40px; margin-left:auto; margin-right:auto; display:block;">
                            <form id="form" class="form" role="form" method="post" action="manage.php">
                                <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
                                <button class="button" type="submit" name="submitApproveRemove">
                                    <span class="text">Remove</span>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        <?php
                        } else {
                        ?>
                            <form id="form" class="form" role="form" method="post" action="manage.php">
                                <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
                                <button class="noselect" type="submit" name="submitApproval" style="background: green;">
                                    <span class="text">Approve</span>
                                    <span class="icon" style="border-color: white;">
                                        <i class="fa fa-check" style="color: white;">
                                            <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                            </path>
                                        </i>
                                    </span>
                                </button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-9">
                        <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <!-- edit hostel code -->
                    <div class="button-container col-3">
                        <form id="form" class="form" role="form" method="post" action="manage.php">
                            <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
                            <button class="noselect" type="submit" name="delete">
                                <span class="text">Delete</span>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>