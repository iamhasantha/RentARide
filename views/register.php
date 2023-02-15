<?php
    /** @var $model Customer */

    use app\models\Customer;

?>

<h1>Register</h1>


<main class="sign-up-mode">
    <div class="box">
        <div class="inner-box">
            <div class="forms-wrap">
                <form action="" method="post" autocomplete="off" class="sign-up-form">
                    <div class="logo">

                        <!-- <h4>Rent-A-Ride</h4> -->
                    </div>

                    <div class="heading">
                        <h2>Get Started!</h2>
                        <h6>Already have a account?</h6>
                        <a href="#" class="toggle">Sign in</a>
                    </div>

                    <div class="actual-form">
                        <div class="input-wrap">

                            <input
                                    name="firstname"
                                    type="text"
                                    minlength="4"
                                    class="input-field<?= $model->hasError('firstname') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    value="<?= $model->thereIsError() ? $model->firstname : ''?>"

                            />
                            <label>Fisrt Name</label>
                             <span class="form-error"><?= $model->getFirstError('firstname') ?></span>
                        </div>

                        <div class="input-wrap">
                            <input
                                    name="lastname"
                                    type="text"
                                    minlength="4"
                                    class="input-field<?= $model->hasError('lastname') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    value="<?= $model->thereIsError() ? $model->lastname : ''?>"

                            />
                            <label>Last Name</label>
                             <span class="form-error"> <?= $model->getFirstError('lastname') ?></span>
                        </div>

                        <div class="input-wrap">
                            <input
                                    name="email"
                                    type="text"
                                    class="input-field<?= $model->hasError('email') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    value="<?= $model->thereIsError() ? $model->email : ''?>"

                            />
                            <label>Email</label>
                             <span class="form-error"> <?= $model->getFirstError('email') ?></span>
                        </div>

                        <div class="input-wrap">
                            <input
                                    name="phoneno"
                                    type="Phone"
                                    minlength="4"
                                    class="input-field<?= $model->hasError('phoneno') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    value="<?= $model->thereIsError() ? $model->phoneno : ''?>"

                            />
                            <label>Phone Number</label>
                             <span class="form-error"> <?= str_replace('phoneno', 'Phone Number', $model->getFirstError('phoneno')) ?></span>
                        </div>

                        <div class="input-wrap">
                            <select class="input-field" name="gender">
                                <option class="input-field label" value="" disabled selected>Select your gender</option>
                                <option class="input-field" value="male">Male</option>
                                <option class="input-field" value="female">Female</option>
                                <option class="input-field" value="other">other</option>
                            </select>
                            <span class="form-error"> <?= $model->getFirstError('gender') ?></span>

                        </div>

                        <div class="input-wrap">
                            <input
                                    name="password"
                                    type="password"
                                    minlength="4"
                                    class="input-field<?= $model->hasError('password') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    id="password"

                            />
                            <label>Password</label>
                             <span class="form-error"> <?= $model->getFirstError('password') ?></span>
                        </div>

                        <div class="input-wrap">
                            <input
                                    name="passwordConfirm"
                                    type="password"
                                    minlength="4"
                                    class="input-field<?= $model->hasError('passwordConfirm') ? ' invalid' : ''?>"
                                    autocomplete="off"
                                    id="confirm_password"

                            />
                            <label>Confirm Password</label>
                             <span class="form-error"> <?= $model->getFirstError('passwordConfirm') ?></span>
                        </div>

                        <input type="submit" value="Sign Up" class="sign-btn">


                        <p class="text">
                            By signing up, I agree to the
                            <a href="#">Terms and Conditions</a> and
                            <a href="#">Privacy Policy</a>
                        </p>
                    </div>


                </form>
            </div>

            <div class="carousel">
            </div>
        </div>
    </div>
</main>

<!--<div class="wrapper">-->
<!--    <div class="registration_form">-->
<!--        <!-- Title-->-->
<!--        <div class="title">-->
<!--            Create an account-->
<!--        </div>-->
<!--<!--        Form-->-->
<!--        <form action="" method="post">-->
<!--            <div class="form_wrap">-->
<!--                <div class="input_grp">-->
<!--<!--                    <!–- Frist name input Place -–>-->-->
<!--                    <div class="input_wrap">-->
<!--                        <label for="fistname">First Name</label>-->
<!--                        <input type="text" name="firstname" value="--><?php //= $model->thereIsError() ? $model->firstname : ''?><!--" class="--><?php //= $model->hasError('firstname') ? ' invalid' : ''?><!--">-->
<!---->
<!--                        <div class="form-errors">-->
<!--                            --><?php //= $model->getFirstError('firstname') ?>
<!--                        </div>-->
<!--                    </div>-->
<!--<!--                    <!– Last Name input place –>-->-->
<!--                    <div class="input_wrap">-->
<!--                        <label for="lastname">Last Name</label>-->
<!--                        <input type="text" id="lname" name="lastname" value="--><?php //= $model->thereIsError() ? $model->lastname : ''?><!--" class="--><?php //= $model->hasError('lastname') ? ' invalid' : ''?><!--">-->
<!--                        <div class="form-errors">-->
<!--                            --><?php //= $model->getFirstError('lastname') ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--<!--                Email Id input Place-->-->
<!--                <div class="input_wrap">-->
<!--                    <label for="email">Email Address</label>-->
<!--                    <input type="text" id="email" name="email" value="--><?php //= $model->thereIsError() ? $model->email : ''?><!--" class="--><?php //= $model->hasError('email') ? ' invalid' : ''?><!--">-->
<!--                    <div class="form-errors">-->
<!--                        --><?php //= $model->getFirstError('email') ?>
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <!--                Phone no input Place-->-->
<!--                <div class="input_wrap">-->
<!--                    <label for="phoneno">Phone no</label>-->
<!--                    <input type="text" id="phoneno" name="phoneno" value="--><?php //= $model->thereIsError() ? $model->phoneno : ''?><!--" class="--><?php //= $model->hasError('phoneno') ? ' invalid' : ''?><!--">-->
<!--                    <div class="form-errors">-->
<!--                        --><?php //= $model->getFirstError('phoneno') ?>
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <!-- Gender -->-->
<!--                <div class="input_wrap">-->
<!--                    <label id="gender">gender</label>-->
<!--                    <select id="dropdown" name="gender" required>-->
<!--                        <option disabled selected value>-->
<!--                            ---Select Gender----->
<!--                        </option>-->
<!--                        <option value="female">-->
<!--                            Female-->
<!--                        </option>-->
<!--                        <option value="male">-->
<!--                            Male-->
<!--                        </option>-->
<!--                    </select>-->
<!--                    <div class="form-errors">-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="input_wrap">-->
<!--                    <label for="password">Password</label>-->
<!--                    <input type="password" id="password" name="password" class="--><?php //= $model->hasError('phoneno') ? ' invalid' : ''?><!--">-->
<!--                    <div class="form-errors">-->
<!--                        --><?php //= $model->getFirstError('password') ?>
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="input_wrap">-->
<!--                    <label for="confirm_password">Confirm Password</label>-->
<!--                    <input type="password" id="passwordConfirm" name="passwordConfirm" class="--><?php //= $model->hasError('passwordConfirm') ? ' invalid' : ''?><!--">-->
<!--                    <div class="form-errors">-->
<!--                        --><?php //= $model->getFirstError('passwordConfirm') ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <!– Submit button –>-->
<!--                <div class="input_wrap">-->
<!--                    <input type="submit" value= "Register No" class="submit_btn">-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
