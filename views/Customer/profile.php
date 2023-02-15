
<h2 class="page-name">Customer Profile</h2>

<div class="profile-wrapper">
    <div class="left">
<!--        <img src="assets/img/profile.png"-->
<!--             alt="user" width="100">-->

        <!-- New profile pic -->
        <div class="profile-pic">
            <label class="-label" for="file">
                <span class="glyphicon glyphicon-camera"><i class='bx bxs-camera'></i></span>
                <span>Change Image</span>
            </label>
            <form method="post" enctype="multipart/form-data">
                <input id="file" type="file" onchange="loadFile(event)"/>
            </form>

            <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg" id="output" width="150" />
        </div>

        <h4>Hasantha Kariyawasam</h4>
        <p>
            Customer
        </p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Info</h3>

            <div class="info_data">
                <div class="data">
                    <h6>NIC</h6>
                    <p>991131175V</p>
                </div>
                <div class="data">
                    <h6>First Name</h6>
                    <p><?= \app\core\Application::$app->customer->userprofile('firstname')?></p>
                </div>
                <div class="data">
                    <h6>Last Name</h6>
                    <p><?= \app\core\Application::$app->customer->userprofile('lastname')?></p>
                </div>

                <div class="data">
                    <h6>Email</h6>
                    <p><?= \app\core\Application::$app->customer->userprofile('email')?></p>
                </div>
                <div class="data">
                    <h6>Phone No</h6>
                    <p><?= \app\core\Application::$app->customer->userprofile('phoneno')?></p>
                </div>
                <div class="data">
                    <h6>Address</h6>
                    <p>Galle, Sri Lanka</p>
                </div>
                <div class="data">
                    <h6>License Number</h6>
                    <p>-</p>
                </div>

            </div>
            <div class="editProfileBtn">
                <button class="button28" role="button">Edit Profile</button>
            </div>
        </div>
    </div>
</div>

