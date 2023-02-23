<?php
/*  @var $vehInfo VehInfo*/
/*  @var $vehicle Vehicle*/
/*  @var $vehBooking VehBooking*/

use app\models\Vehicle;
use app\models\VehInfo;

?>

<div class="vehicle-card">
    <h2 class="vehicle-name"><?= $vehicle->getVehBrand().' '.$vehicle->getVehModel()?><span> • RR</span></h2>
    <div class="details-cont">
        <div id="gallery">
            <div class="row">
                <div class="large-image">
                    <img src="assets/img/vehicle/gallery/front.jpg">
                </div>
            </div>
            <div class="row">
                <div class="thumbnails">
                    <img src="assets/img/vehicle/gallery/front.jpg" data-large="assets/img/vehicle/gallery/front.jpg">
                    <img src="assets/img/vehicle/gallery/side.jpg" data-large="assets/img/vehicle/gallery/side.jpg">
                    <img src="assets/img/vehicle/gallery/inside.jpg" data-large="assets/img/vehicle/gallery/inside.jpg">
                </div>
            </div>

        </div>


        <div class="vehicle-details">
            <div class="vehicle-features">
                <span class="vehicle-seats"><i class='bx bx-user'></i> <?= $vehInfo->getSeatsCount()?> seats</span>
                <span class="vehicle-fuel"><i class='bx bxs-gas-pump' ></i><?= $vehInfo->getFuelType()?></span>
                <span class="vehicle-transmission"><i class='bx bx-slider bx-rotate-90' ></i> <?= $vehInfo->getTransmission()?></span>
                <span class="vehicle-fpd"><i class='bx bx-tachometer' ></i> <?= $vehInfo->getAvgfuel()?> km/l</span>
            </div>

            <div class="vehicle-info">

                <div class="two-column-layout">
                    <div class="left-column">
                        <ul>
                            <li class="bold">Brand: <?= $vehicle->getVehBrand()?></li>
                            <li class="bold">Model: <?= $vehicle->getVehModel()?></li>
                            <li class="bold">Type: <?= $vehicle->getVehType()?></li>
                            <li class="bold">Plate No: <?= substr($vehicle->getPlateNo(), 0, -3) . '***' ?></li>
                            <li class="bold">Year: <?= $vehInfo->getYear()?></li>
                        </ul>
                    </div>
                    <div class="right-column">
                        <ul>
                            <li class="bold">Color:  <?= $vehInfo->getVehColor()?></li>
                            <li class="bold">Seats:  <?= $vehInfo->getSeatsCount()?></li>
                            <li class="bold">Transmission:  <?= $vehInfo->getTransmission()?></li>
                            <li class="bold">Fuel:  <?= $vehInfo->getFuelType()?></li>
                        </ul>
                    </div>
                </div>
                <div class="vehicle-description">
                    <p class="bold">Description</p>
                    <p><?= $vehInfo->getDescription()?></p>
                </div>
                <div class="vehicle-price">
                    <span>Vehicle Rent Price (Per/ Day):</span>
                    <span class="price">Rs. <?= $vehicle->getPrice()?>.00 </span>
                </div>

            </div>

        </div>

    </div>


    <form action="" method="get">
    <div class="set-date-loc">


            <input name="id" value="<?=$vehicle->getVehId()?>" hidden>
            <input name="type" value="submit" hidden>

        <div class="set-loc">
            <label for="set-loc">Pick-up Location</label>
            <select id="location" name="location">
                <option value="" disabled selected hidden>location</option>
                <option value="Galle">Galle</option>
                <option value="Negombo">Negombo</option>
                <option value="Mathale">Mathale</option>
                <option value="Kandy">Kandy</option>
            </select>
        </div>
        <div class="date-input">
            <label for="start-date">Start Date</label>
            <input type="date" id="start-date" name="startDate">
        </div>
        <div class="date-input">
            <label for="end-date">End Date</label>
            <input type="date" id="end-date" name="endDate">
        </div>


    </div>
        <input type="submit" class="book-btn"/>
    </form>


</div>



<!--<script>-->
<!--    // const bookBtn = document.querySelector('.book-btns');-->
<!--    //-->
<!--    // bookBtn.addEventListener('click', function() {-->
<!--    //     confirm('Are you sure you want to book this vehicle?');-->
<!--    // });-->
<!--    //-->
<!--    // $(document).ready(function() {-->
<!--    //     $('.thumbnails img').click(function() {-->
<!--    //         var largeImage = $(this).data('large');-->
<!--    //         $('.large-image img').attr('src', largeImage);-->
<!--    //     });-->
<!--    // });-->
<!---->
<!---->
<!--</script>-->
