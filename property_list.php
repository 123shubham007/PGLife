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
    <div class="filter-bar row justify-content-around a1" style="margin:auto; max-width:600px; font-weight: bold;">
        <div class="col-auto" style="margin: 10px;" data-toggle="modal" data-target="#filter-modal">
            <img src="img/filter.png" alt="filter" />
            <span>Filter</span>
        </div>
        <div class="col-auto" style="margin: 10px;">
            <a class="btn" style="padding: 0rem;" href="filter1.php?order=1">
                <img src="img/desc.png" alt="sort-asc" />
                <span>Highest rent first</span>
            </a>
        </div>
        <div class="col-auto" style="margin: 10px;">
            <a class="btn" style="padding: 0rem;" href="filter1.php?order=2">
                <img src="img/asc.png" alt="sort-desc" />
                <span>Lowest rent first</span>
            </a>
        </div>
    </div>
    <br /><br />
    <?php
    foreach ($properties as $property) {
    ?>
        <div class="property-card property-id-<?= $property['id'] ?> row">
            <div class="image-container col-md-4">
                <img src="admin/img/properties/profile<?= $property['id'] ?>.png" />
            </div>
            <div class="content-container col-md-8">

                <div class="detail-container">
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
                    <div class="row justify-content-between">
                        <div class="col-md-auto">
                            <input type="hidden" id="amenitie0" name="amenitie0" value="0">
                            <input type="checkbox" id="amenitie0" name="amenitie0" value="cctv">
                            <label for="amenitie0">CCTV</label><br>
                            <input type="hidden" id="amenitie1" name="amenitie1" value="0">
                            <input type="checkbox" id="amenitie1" name="amenitie1" value="ac">
                            <label for="amenitie1">AC</label><br>
                            <input type="hidden" id="amenitie2" name="amenitie2" value="0">
                            <input type="checkbox" id="amenitie2" name="amenitie2" value="bed">
                            <label for="amenitie2">Single Sharing</label><br>
                            <input type="hidden" id="amenitie3" name="amenitie3" value="0">
                            <input type="checkbox" id="amenitie3" name="amenitie3" value="double bed">
                            <label for="amenitie3">Double Sharing</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="hidden" id="amenitie4" name="amenitie4" value="0">
                            <input type="checkbox" id="amenitie4" name="amenitie4" value="dining">
                            <label for="amenitie4">Dining Hall</label><br>
                            <input type="hidden" id="amenitie5" name="amenitie5" value="0">
                            <input type="checkbox" id="amenitie5" name="amenitie5" value="gym">
                            <label for="amenitie5">GYM</label><br>
                            <input type="hidden" id="amenitie6" name="amenitie6" value="0">
                            <input type="checkbox" id="amenitie6" name="amenitie6" value="lift">
                            <label for="amenitie6">Lift</label><br>
                            <input type="hidden" id="amenitie7" name="amenitie7" value="0">
                            <input type="checkbox" id="amenitie7" name="amenitie7" value="parking">
                            <label for="amenitie7">Parking</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="hidden" id="amenitie8" name="amenitie8" value="0">
                            <input type="checkbox" id="amenitie8" name="amenitie8" value="powerbackup">
                            <label for="amenitie8">Power Backup</label><br>
                            <input type="hidden" id="amenitie9" name="amenitie9" value="0">
                            <input type="checkbox" id="amenitie9" name="amenitie9" value="washing machine">
                            <label for="amenitie9">Washing Machine</label><br>
                            <input type="hidden" id="amenitie10" name="amenitie10" value="0">
                            <input type="checkbox" id="amenitie10" name="amenitie10" value="geyser">
                            <label for="amenitie10">Geyser</label><br>
                            <input type="hidden" id="amenitie11" name="amenitie11" value="0">
                            <input type="checkbox" id="amenitie11" name="amenitie11" value="rowater">
                            <label for="amenitie11">RO water</label><br>
                        </div>
                        <div class="col-md-auto">
                            <input type="hidden" id="amenitie12" name="amenitie12" value="0">
                            <input type="checkbox" id="amenitie12" name="amenitie12" value="tv">
                            <label for="amenitie12">TV</label><br>
                            <input type="hidden" id="amenitie13" name="amenitie13" value="0">
                            <input type="checkbox" id="amenitie13" name="amenitie13" value="wifi">
                            <label for="amenitie13">WiFi</label><br>
                            <input type="hidden" id="amenitie14" name="amenitie14" value="0">
                            <input type="checkbox" id="amenitie14" name="amenitie14" value="fire exit">
                            <label for="amenitie14">Fire Exit</label><br>
                            <input type="hidden" id="amenitie15" name="amenitie15" value="0">
                            <input type="checkbox" id="amenitie15" name="amenitie15" value="garden">
                            <label for="amenitie15">Garden</label><br>
                        </div>
                    </div>
                    <div class="modal-footer" style="padding: 0px;">
                        <p>
                            <button class="cta" type="submit">
                                <span class="hover-underline-animation"> Continue </span>
                                <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
                                    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                                </svg>
                            </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/property_list.js"></script>