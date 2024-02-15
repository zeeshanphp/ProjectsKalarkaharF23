<?php
include 'db.php';
session_start();
$message = "";

$custId = $_SESSION['uid'];
if (isset($_POST['add_feedback'])) {
    $feedback = $_POST['feedback'];
    $query = "INSERT INTO feedback (feedback,custId) VALUES('$feedback' , '$custId')";
    mysqli_query($conn, $query);
    $message = "Feedback Sent to Admin Successfully";
}
include 'header.php'

?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <?php if ($message != "") { ?>
                    <div class="alert alert-success"><?php echo $message ?></div>
                <?php } ?>
                <div class="card-header">
                    <center>
                        <h4 class="py-2">ADD FEEDBACK</h4>
                    </center>
                </div>
                <div class="card-body">
                    <form method="post">
                        <table class="table table-borderless">
                            <tr>
                                <td style="vertical-align:middle;"><b>Your Feedback</b></td>
                                <td><textarea name="feedback" class="form-control" rows="10"></textarea></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" value="Add Feedback" name="add_feedback" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
<?php
include 'footer.php'
?>