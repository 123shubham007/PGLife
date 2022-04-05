<?php
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

$sql_1 = "SELECT * FROM properties";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!123";
    return;
}
$properties = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
?>
<div class="page-container">
    <div class="filter-bar row justify-content-around">
        <div class="col-auto" data-toggle="modal" data-target="#filter-modal">
            <img src="img/filter.png" alt="filter" />
            <span>Filter</span>
        </div>
        <!-- <div class="col-auto">
            <img src="img/desc.png" alt="sort-asc" />
            <span>Highest rent first</span>
        </div>
        <div class="col-auto">
            <img src="img/asc.png" alt="sort-desc" />
            <span>Lowest rent first</span>
        </div> -->
    </div>

    <?php
    foreach ($properties as $property) {
        $property_images = glob("img/properties/" . $property['id'] . "/*");
    ?>
        <div class="property-card property-id-<?= $property['id'] ?> row">
            <div class="image-container col-md-4">
                <img src="<?= $property_images[0] ?>" />
            </div>
            <div class="content-container col-md-8">

                <div class="detail-container">
                    <div class="property-name"><?= $property['name'] ?></div>
                    <div class="property-address"><?= $property['address'] ?></div>
                    <div class="property-gender">
                        <?php
                        if ($property['gender'] == "Male") {
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
                        <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <div class="button-container col-3">
                        <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="b">View</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="filter-heading">Amenities Filter</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="search-form" action="filter.php" method="GET">
                    <div style="justify-content:center;">
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="lift">
                            Lift
                        </button>

                        <button class="btn btn-outline-dark" id="filter" name="filter" value="wifi">
                            Wifi
                        </button>

                        <button class="btn btn-outline-dark" id="filter" name="filter" value="parking">
                            Parking
                        </button>
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="bed">
                            Single Bed
                        </button>
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="double bed">
                            Double Bed
                        </button>
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="triple sharing">
                            Triple Bed
                        </button>
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="ac">
                            AC
                        </button>
                        <button class="btn btn-outline-dark" id="filter" name="filter" value="gym">
                            Gym
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/property_list.js"></script>