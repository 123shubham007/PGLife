<?php
$id = $_SESSION["user_id"];
$sql_1 = "SELECT * FROM adminproperty ap INNER JOIN properties p ON ap.properties_id = p.id 
        INNER JOIN admin a ON ap.admin_id = a.id WHERE ap.admin_id = $id";
?>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-heading">Edit Your Hostel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="hostel-form" class="form" role="form" method="post" action="api/edit_submit.php?id=<?= $id ?>">
                    <p><input class="w3-input w3-padding-16  " type="text" placeholder="Name Of Hostel" required name="name"></p>
                    <p><input class="w3-input w3-padding-16  " type="text" placeholder="Address" required name="address"></p>
                    <p><input class="w3-input w3-padding-16  " type="text" placeholder="Rent per Month" required name="rent"></p>

                    <div class="form-group w3-padding-16  " style="text-align: center;">
                        <span>Hostel for</span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />
                        <label for="gender-male">
                            Male
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <h4 class="w3-text-light-white" style="padding: 10px;"> Amenities </h4>
                    <div class="page-container  " style="padding: 25px 25px;">
                        <div class="row justify-content-between">
                            <div class="col-md-auto">
                                <input type="checkbox" id="amenitie0" name="amenitie0" value="cctv">
                                <label for="amenitie0">CCTV</label><br>
                                <input type="checkbox" id="amenitie1" name="amenitie1" value="ac">
                                <label for="amenitie1">AC</label><br>
                                <input type="checkbox" id="amenitie2" name="amenitie2" value="bed">
                                <label for="amenitie2">Single Sharing</label><br>
                                <input type="checkbox" id="amenitie3" name="amenitie3" value="double bed">
                                <label for="amenitie3">Double Sharing</label><br>
                                <input type="checkbox" id="amenitie4" name="amenitie4" value="dining">
                                <label for="amenitie4">Dining Hall</label><br>
                                <input type="checkbox" id="amenitie5" name="amenitie5" value="gym">
                                <label for="amenitie5">GYM</label><br>
                                <input type="checkbox" id="amenitie6" name="amenitie6" value="lift">
                                <label for="amenitie6">Lift</label><br>
                                <input type="checkbox" id="amenitie7" name="amenitie7" value="parking">
                                <label for="amenitie7">Parking</label><br>
                            </div>
                            <div class="col-md-auto">
                                <input type="checkbox" id="amenitie8" name="amenitie8" value="powerbackup">
                                <label for="amenitie8">Power Backup</label><br>
                                <input type="checkbox" id="amenitie9" name="amenitie9" value="washing machine">
                                <label for="amenitie9">Washing Machine</label><br>
                                <input type="checkbox" id="amenitie10" name="amenitie10" value="geyser">
                                <label for="amenitie10">Geyser</label><br>
                                <input type="checkbox" id="amenitie11" name="amenitie11" value="rowater">
                                <label for="amenitie11">RO water</label><br>
                                <input type="checkbox" id="amenitie12" name="amenitie12" value="tv">
                                <label for="amenitie12">TV</label><br>
                                <input type="checkbox" id="amenitie13" name="amenitie13" value="wifi">
                                <label for="amenitie13">WiFi</label><br>
                                <input type="checkbox" id="amenitie14" name="amenitie14" value="fire exit">
                                <label for="amenitie14">Fire Exit</label><br>
                                <input type="checkbox" id="amenitie15" name="amenitie15" value="garden">
                                <label for="amenitie15">Garden</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="fancy" type="submit">
                            <span class="top-key"></span>
                            <span class="text">Confirm</span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>