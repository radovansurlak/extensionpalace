<link rel="stylesheet" type="text/css" href="css/header.css">


<!--Used PHP instead of JS to make menu classes to menu-selected-->
<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="menu-selected"';
}
?>

<header class="header">
                <div class="menu-heading" >
                <a href="index.php"><img class="img-responsive logo" src="img/logo.png" alt="Extension Palace Logo" /></a>
        <div class=" navbar menu menu-horizontal menu-fixed">
            <nav>
            <ul class="menu-list">
                <li class="menu-item"><a href="index.php"<?=echoSelectedClassIfRequestMatches("index")?> class="menu-link">Home</a></li>
                <li class="menu-item"><a href="booking.php"<?=echoSelectedClassIfRequestMatches("booking")?> class="menu-link">Booking</a></li>
                <li class="menu-item"><a href="services.php"<?=echoSelectedClassIfRequestMatches("services")?> class="menu-link">Services</a></li>
                <li class="menu-item"><a href="gallery.php" <?=echoSelectedClassIfRequestMatches("gallery")?>class="menu-link">Gallery</a></li>
                <li class="menu-item"><a href="about.php" <?=echoSelectedClassIfRequestMatches("about")?>class="menu-link">About</a></li>
            </ul>
            </nav>
        </div>
        </div>
</header>

<script src="js/header.js"></script>
