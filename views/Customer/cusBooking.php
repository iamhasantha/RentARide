<?php

?>

<form action="" method="post">
<div class="book-cont">
    <div class="vehicle-card-minimize">
        <h2 class="vehicle-name">Vehicle Name<span> • RR</span></h2>
        <div class="details-cont">
            <!-- Vehicle Gallery -->
            <div id="gallery2">
                <div class="row">
                    <div class="large-image small">
                        <img class="small" src="assets/img/vehicle/gallery/front.jpg">
                    </div>
                </div>
            </div>


            <div class="vehicle-details">
                <div class="vehicle-features">
                    <span class="vehicle-seats"><i class='bx bx-user'></i> 5 seats</span>
                    <span class="vehicle-fuel"><i class='bx bxs-gas-pump' ></i> Petrol</span>
                    <span class="vehicle-transmission"><i class='bx bx-slider bx-rotate-90' ></i> Automatic</span>
                    <span class="vehicle-fpd"><i class='bx bx-tachometer' ></i> 18 km/l</span>
                </div>
                <div class="vehicle-price">
                    <span>Vehicle Rent Price (Per/ Day):</span>
                    <span class="price">Rs. 3500.00 </span>
                </div>

                <div class="vehicle-info">
                    <div class="set-date-loc-min">
                        <div class="set-loc">
                            <label for="set-loc">Pick-up</label>
                            <select class="location" name="pickupLocation">
                                <option name="location" value="" disabled selected hidden></option>
                                <?php if(!empty($location)): ?>
                                <option value="<?=$location?>" selected="selected"><?=$location?></option>
                                <?php endif; ?>
                                <option value="Galle">Galle</option>
                                <option value="Negombo">Negombo</option>
                                <option value="Mathale">Mathale</option>
                                <option value="Kandy">Kandy</option>
                            </select>
                        </div>
                        <div class="date-input">
                            <label for="start-date">Start Date</label>
                            <input class="location" type="date" id="start-date" name="startDate" value="<?=$start_date?>">
                        </div>
                        <div class="date-input">
                            <label for="end-date">End Date</label>
                            <input class="location" type="date" id="end-date" name="endDate" value="<?=$end_date?>">
                        </div>
                    </div>

                </div>

            </div>
        </div>





    </div>

    <div class="booking-section">
        <section id="need-driver" class="sub-section">
            <h4>Request a driver</h4>
            <div class="space-evenly">
                <p>Do you want a driving partner to your ride?</p>
                <label class="switch">
                    <input name="driverReq" id="checkbox1" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </section>

<!--        <section class="add-driver" id="add-driver" style="display:none;">-->
<!--            <h3>Driver Details</h3>-->
<!--            <p>Please enter the driver's details below:</p>-->
<!---->
<!--            <div class="row">-->
<!--                <form>-->
<!--                    <label for="driver-name">Available Drivers:</label>-->
<!---->
<!--                    <select id="driver-name" name="driver-name">-->
<!--                        <option value="" disabled selected hidden>Driver Name</option>-->
<!--                        <option value="Suresh">Suresh</option>-->
<!--                        <option value="Kamal">Kamal</option>-->
<!--                        <option value="Nimal">Nimal</option>-->
<!--                        <option value="Sunil">Sunil</option>-->
<!--                    </select>-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--            <section class="driver-details" id="driver-details" style="display:none;">-->
<!--                <h3>Selected Driver Details</h3>-->
<!--                <p id="driver-details-text">Driver details will appear here when a driver is selected from the list.</p>-->
<!--            </section>-->
<!---->
<!--        </section>-->


    </div>

    <div class="booking-section">
        <section class="sub-section">
            <h4>Payment Method</h4>
            <div class="space-evenly">
                <p>What's your preferred payment method? </p>
                <select id="paymentMethod" name="payMethod">
                    <option value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="HelaPay QR">Helapay</option>
                </select>
            </div>

        </section>



    </div>

    <div class="booking-section">
        <section id="add-note" class="sub-section">
            <h4>Additional Note</h4>
            <div class="space-evenly">
                <p>Is there anything else you would like tell to Vehicle Owner?  </p>
                <label class="switch">
                    <input id="checkbox2" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>

        </section>

        <section class="add-driver" id="add-textbox" style="display:none;">
            <p style="font-weight: 500;">Anthing to say...</p>
            <textarea name="note" id="text-area" class="myTextArea" data-max-chars="100" placeholder="This is some default text that will appear in the text area.">
            </textarea>
            <p id="char-limit">Character limit: 100</p>

        </section>


    </div>

    <button type="submit" id="send-request">
        Send Request
    </button>

</div>
</form>





