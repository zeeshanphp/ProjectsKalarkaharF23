<?php
include 'db.php';
session_start();
$id = $_GET['status'];
$result = mysqli_query($conn, "SELECT * FROM courier WHERE courierId='$id'");
$row = mysqli_fetch_array($result);
$member = $_SESSION['memberId'];
$message = "";
if (isset($_POST['update_courier'])) {
    $status = $_POST['status'];
    $query = "UPDATE courier SET status='$status' WHERE courierId='$id'";
    if (mysqli_query($conn, $query)) {
        $sql = "INSERT INTO track_courier(courierId,current_status) VALUES('$id' , '$status')";
        mysqli_query($conn, $sql);
        header('location: manage_courier.php');
    }
    $message = "Courier Details Saved Successfully";
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-primary">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-6">
        <center>
            <h3 class="bg-success text-white bg-gradient rounded py-2">COURIER INFO</h3>
        </center>
        <div class="row">

            <?php if ($message != "") { ?>
                <div class="alert alert-success bg-gradient"><?php echo $message ?></div>
            <?php } ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>SENDER INFO</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td colspan="2"> <b> Sender Name: </b> <?php echo $row['sname'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Sender Phone: </b> <?php echo $row['sphone'] ?></td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b> Sender Email: </b><?php echo $row['semail'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b> Sender Adress: </b><?php echo $row['sadress'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>RECEIVER INFO</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td colspan="2"> <b> Reciever Branch: </b><?php echo $row['rbranch'] ?>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Reciever Name: </b> <?php echo $row['rname'] ?></td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b> Reciever Phone: </b><?php echo $row['rphone'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b> Reciever Email: </b><?php echo $row['remail'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>

        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header"> <b>COURIER DETAILS</b></div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td> <b> Courier Type :</b> <br>
                                    <?php echo $row['ctype'] ?>
                                </td>
                                <td><b>Quantity: </b><?php echo $row['cqty'] ?></td>
                                <td><b>Courier Fee:</b> <?php echo $row['cfee'] ?></td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <form action="" method="post">
            <div class="card">
                <div class="card-header bg-info bg-gradient">
                    <h4>
                        <center>
                            UPDATE COURIER STATUS
                        </center>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td style="vertical-align: middle;"> <b> Update Status</b></td>
                            <td>
                                <textarea name="status" id="" class="form-control" rows="5"><?php echo $row['status'] ?>
                                </textarea>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="update_courier" class="btn btn-primary" value="Update Courier Status">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>