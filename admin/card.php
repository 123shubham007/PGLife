<?php
$admin_id = $_SESSION["admin_id"];
$sql_1 = "SELECT * FROM adminproperty ap INNER JOIN properties p ON ap.properties_id = p.id 
         WHERE ap.admin_id = $admin_id";

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
                <img src="img/properties/profile<?= $property['id'] ?>.png" />
            </div>
            <div class="content-container col-md-8">
                <div class="row no-gutters">
                    <div class="detail-container col-11">
                        <div class="property-name"><?= $property['name'] ?></div>
                        <div class="property-address"><?= $property['address'] ?></div>
                        <div class="property-gender">
                            <?php
                            if ($property['gender'] == "male") {
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
                    <div class="button-container col-1">
                        <?php
                        if ($property['approve'] == 1) {
                        ?>
                            <img src="img/approve.gif" style="width:40px">

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-7">
                        <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <!-- edit hostel code -->
                    <div class="button-container col-3">
                        <a class="b btn" href="edit.php?id=<?= $property['id'] ?>">
                            Edit
                        </a>
                    </div>
                    <div class="button-container col-1" style="margin-left: auto;">
                        <form id="form" class="form" role="form" method="post" action="api/edit_submit.php">
                            <input type="hidden" name="property_id" value="<?= $property['id'] ?>">
                            <style>
                                button {
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;
                                    padding: 1em;
                                    border: 0px solid transparent;
                                    background-color: rgba(100, 77, 237, 0.08);
                                    border-radius: 1.25em;
                                    transition: all 0.2s linear;
                                }

                                button:hover {
                                    box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
                                        8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
                                        17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
                                        36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
                                        99px 72px 143px rgba(0, 0, 0, 0.08);
                                }
                            </style>
                            <button class="noselect" type="submit" name="delete">
                                <i class="fa fa-trash"></i>
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