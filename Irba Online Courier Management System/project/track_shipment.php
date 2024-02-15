<?php
include 'header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 py-3 mt-5 rounded text-white" style="background-color: rgb(242 30 38/1);">
            <center><b>TRACK SHIPMENT</b></center>
        </div>
        <div class="col-md-12">
            <form action="search.php" method="POST">
                <table class="table">
                    <tr>
                        <td><input type="text" class="form-control" name="email" placeholder="Enter Email Adress" required /></td>
                        <td><input type="text" class="form-control" name="phone" placeholder="Enter Phone No" required /></td>
                        <td><input type="submit" name="track_shipment" class="btn cust-btn w-100 text-white" value="Track Shipment"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php'
?>