<?php ?>

<div class="vehicle-card">
    <h2 class="vehicle-name">Vehicle Name<span> • RR</span></h2>
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
                <span class="vehicle-seats"><i class='bx bx-user'></i> 5 seats</span>
                <span class="vehicle-fuel"><i class='bx bxs-gas-pump' ></i> Petrol</span>
                <span class="vehicle-transmission"><i class='bx bx-slider bx-rotate-90' ></i> Automatic</span>
                <span class="vehicle-fpd"><i class='bx bx-tachometer' ></i> 18 km/l</span>
            </div>

            <div class="vehicle-info">

                <div class="two-column-layout">
                    <div class="left-column">
                        <ul>
                            <li>Vehicle ID: SUV</li>
                            <li>Brand: Toyota</li>
                            <li>Model: Fortuner</li>
                            <li>Type: Car</li>
                            <li>Plate No: sp CAH 5606</li>
                            <li>Year: 2012</li>
                        </ul>
                    </div>
                    <div class="right-column">
                        <ul>
                            <li>Color: White</li>
                            <li>Doors: 4</li>
                            <li>Seats: 5</li>
                            <li>Transmission: Automatic</li>
                            <li>Fuel: Petrol</li>
                            <li>AC: Yes</li>
                        </ul>
                    </div>
                </div>
                <div class="vehicle-price">
                    <span>Vehicle Rent Price (Per/ Day):</span>
                    <span class="price">Rs. 3500.00 </span>
                </div>

            </div>

        </div>

    </div>

    <div class="set-date-loc">
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
            <input type="date" id="start-date" name="start-date">
        </div>
        <div class="date-input">
            <label for="end-date">End Date</label>
            <input type="date" id="end-date" name="end-date">
        </div>
    </div>


</div>

<button onclick="location.href='/VehicleBooking'" class="book-btn">Book Now</button>

<script>
    const bookBtn = document.querySelector('.book-btn');

    bookBtn.addEventListener('click', function() {
        confirm('Are you sure you want to book this vehicle?');
    });

    $(document).ready(function() {
        $('.thumbnails img').click(function() {
            var largeImage = $(this).data('large');
            $('.large-image img').attr('src', largeImage);
        });
    });


</script>
