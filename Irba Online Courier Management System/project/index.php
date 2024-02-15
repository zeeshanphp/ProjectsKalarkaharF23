<?php
include 'header.php'
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/banner-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <form action="search.php" method="POST">
                    <table class="table">
                        <tr>
                            <td><input type="text" class="form-control" name="email" placeholder="Enter Email Adress" required /></td>
                            <td><input type="text" class="form-control" name="phone" placeholder="Enter Phone No" required /></td>
                            <td><input type="submit" name="track_shipment" class="btn cust-btn w-100  bg-gradient" value="Track Shipment"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/banner-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <form action="search.php" method="POST">
                    <table class="table">
                        <tr>
                            <td><input type="text" class="form-control" name="email" placeholder="Enter Email Adress" required /></td>
                            <td><input type="text" class="form-control" name="phone" placeholder="Enter Phone No" required /></td>
                            <td><input type="submit" name="track_shipment" class="btn cust-btn w-100  bg-gradient" value="Track Shipment"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/banner-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <form action="search.php" method="POST">
                    <table class="table">
                        <tr>
                            <td><input type="text" class="form-control" name="email" placeholder="Enter Email Adress" required /></td>
                            <td><input type="text" class="form-control" name="phone" placeholder="Enter Phone No" required /></td>
                            <td><input type="submit" name="track_shipment" class="btn cust-btn w-100  bg-gradient" value="Track Shipment"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php
include 'footer.php'
?>