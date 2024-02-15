<?php
include 'db.php';
session_start();
$member = $_SESSION['memberId'];
$message = "";
if (isset($_POST['add_courier'])) {
    $sname = $_POST['sname'];
    $sphone = $_POST['sphone'];
    $semail = $_POST['semail'];
    $sadress = $_POST['sadress'];
    $rbranch = $_POST['rbranch'];
    $rname = $_POST['rname'];
    $rphone = $_POST['rphone'];
    $remail = $_POST['remail'];
    $ctype = $_POST['ctype'];
    $cqty = $_POST['cqty'];
    $cfee = $_POST['cfee'];
    $query = "INSERT INTO courier (sname,sphone,semail,sadress,rbranch,rname,rphone,remail,ctype,cqty,cfee,memberId) VALUES('$sname','$sphone' , '$semail' , '$sadress' , '$rbranch' , '$rname' , '$rphone' , '$remail' , '$ctype' , '$cqty' , '$cfee' , '$member')";

    if (mysqli_query($conn, $query)) {
        $courier_id = mysqli_insert_id($conn);
        // insert into courierdetails table
        $sql = "INSERT INTO track_courier(courierId,current_status) VALUES('$courier_id' , 'Booked At Parent Branch')";
        mysqli_query($conn, $sql);
    }


    $message = "Courier Details Saved Successfully";
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-primary">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-8">
        <center>
            <h3 class="bg-success text-white bg-gradient rounded py-3">SEND COURIER</h3>
        </center>
        <form action="" method="post">
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
                                    <td colspan="2"> <b> Sender Name: </b><br> <input type="text" class="form-control" name="sname" placeholder="Sender Name" required /></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Sender Phone: </b><br> <input type="text" class="form-control" name="sphone" placeholder="Sender Phone" required /></td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b> Sender Email: </b><br> <input type="text" class="form-control" name="semail" placeholder="Sender Email" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b> Sender Adress: </b><br> <input type="text" class="form-control" name="sadress" placeholder="Sender Address" required />
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
                                    <td colspan="2"> <b> Reciever Branch: </b><br>
                                        <select name="rbranch" class="form-select">
                                            <option>Select Branch</option>
                                            <?php
                                            $result = mysqli_query($conn, "SELECT * FROM branches");
                                            while ($row = mysqli_fetch_array($result)) {  ?>
                                                <option value="<?php echo $row['sname'] ?>"><?php echo $row['sname'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Reciever Name: </b><br> <input type="text" class="form-control" name="rname" placeholder="Reciever Name" required /></td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b> Reciever Phone: </b><br> <input type="text" class="form-control" name="rphone" placeholder="Reciever Phone" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b> Reciever Email: </b><br> <input type="text" class="form-control" name="remail" placeholder="Reciever Email" required />
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
                                        <select name="ctype" id="" class="form-select">
                                            <option value="">--Select Courier Type-</option>
                                            <option value="Urgent">Urgent</option>
                                            <option value="Regular">Regular</option>
                                        </select>
                                    </td>
                                    <td><b>Quantity: </b><br> <input type="number" class="form-control" name="cqty" placeholder="Enter Weight" required /></td>
                                    <td><b>Courier Fee:</b> <br> <input type="number" class="form-control" name="cfee" placeholder="Enter Fee For Courier" required /></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><input type="submit" name="add_courier" class="float-end bg-gradient btn btn-primary" value="Add Courier"></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
<?php
include 'footer.php';
?>