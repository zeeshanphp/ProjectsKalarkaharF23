<?php
include 'header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 py-3 mt-5 rounded text-white" style="background-color: rgb(242 30 38/1);">
            <center><b>CONTACT US</b></center>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" enctype="multipart/form-data">
                <table class="table table-borderless">
                    <tr>
                        <td><b>Enter FullName</b></td>
                        <td><input type="text" class="form-control" name="fname" placeholder="Enter User FullName" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Email Adress</b></td>
                        <td><input type="text" class="form-control" name="email" placeholder="Enter User Email Adress" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Your Message</b></td>
                        <td>
                            <textarea name="message" id="" cols="80" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="contact_us" class="btn cust-btn w-100" value="CONTACT US" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php'
?>