<?php

use app\core\Application;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Nav CSS -->
    <link rel="stylesheet" href="<?php echo Application::$ROOT_DIR?>/public/assets/css/main.css">

    <title>Rent A Ride</title>

    <link rel="stylesheet" href="assets/css/layout/style.css">
<!--    <link rel="stylesheet" href="assets/css/main.css">-->

</head>
<body>

    <nav class="navbar">
        <div class="container-icon">
            <a href=""><img class="logo" src="/assets/img/logo.png" alt="Rent a Ride Logo"></a>
        </div>
        <ul class="nav-list" id="nav-list">
            <?php if (Application::isGuest()):?>
                <li class="list-item 1"><a href="/login">Sign in</a></li>
                <li class="list-item 2"><a href="/register">Register</a></li>
            <?php else: ?>
                <div class="profile-cont">
                    <span class="profile-name"><?= Application::$app->customer->displayName(); ?></span>
                    <div class="img-cont"><img src="<?= Application::$app->customer->userprofile('profile_pic')?>" class="profile-image"></div>
                </div>
            <li class="list-item 1"><a href="/logout"><i class='bx bx-log-in-circle bx-sm'></i></a></li>
            <?php endif; ?>

        </ul>
        <div id="toggle-btn" class="menu-container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </nav>

    <?php if (Application::$app->session->getFlash('success')):?>
        <div class="flash-message success">
            <?= Application::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>


    {{content}}

</body>

</html>
