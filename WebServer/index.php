<?php 
require 'includes/header.php';

require_once 'helpers/session-expiry.php';

?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/home-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/2.png" class="d-block w-100" alt="...">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-header text-center pb-5" style="margin-top: 2rem;">
                <h2>Gallery</h2>
                <p>Lets join together on this adventure.</p>
            </div>
        </div>
    </div>
</div>

<!-- Gallery section -->
<div class="container" style="width: 70%;">
    <div class=flex-container>
        <img src="./assets/gallery/p11.png">
        <img src="assets/gallery/p05.png">
        <img src="assets/gallery/farm_evening_1920x1080.png">
        <img src="assets/gallery/Multiplayer_Horses.png">
        <img src="assets/gallery/Multiplayer_Screenshot2.png">
        <img src="assets/gallery/Mutiplayer_Screenshot1.png">
    </div>
</div>

<?php
echo "Logged in: " . ($_SESSION["logged_in"] ?? 'Not set') . "<br>";
echo "Is Admin: " . ($_SESSION["is_admin"] ?? 'Not set') . "<br>";

require_once './includes/footer.php';
?>