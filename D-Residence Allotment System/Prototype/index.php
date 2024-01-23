<?php
session_start();
include 'header.php'

?>
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/room.jpg" class="d-block w-100" alt="..." style="height: 570px;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-danger">Residential Automation System</h5>

            </div>
        </div>

    </div>

</div>


<?php include 'footer.php' ?>