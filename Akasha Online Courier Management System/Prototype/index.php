<?php
$conn = mysqli_connect("localhost", "root", "", "ocms");
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
    $query = "INSERT INTO courier (sname,sphone,semail,sadress,rbranch,rname,rphone,remail,ctype,cqty,cfee) VALUES('$sname','$sphone' , '$semail' , '$sadress' , '$rbranch' , '$rname' , '$rphone' , '$remail' , '$ctype' , '$cqty' , '$cfee')";
    mysqli_query($conn, $query);
    $message = "Courier Details Saved Successfully";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courier Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row bg-primary bg-gradient">
            <div class="col-md-12">
                <h4 class="py-4 text-white"> Branch Staff Pannel</h4>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <form method="post">
                <div class="card">
                    <?php if ($message != "") { ?>
                        <div class="alert alert-success bg-gradient"><?php echo $message ?></div>
                    <?php } ?>
                    <div class="card-header">
                        <h4>CREATE COURIER</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header"> <b>Sender Info</b> </div>
                                        <div class="card-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td> <b> Sender Name: </b><br> <input type="text" class="form-control" name="sname" placeholder="Sender Name" required /></td>
                                                    <td><b>Sender Phone: </b><br> <input type="text" class="form-control" name="sphone" placeholder="Sender Phone" required /></td>
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
                                        <div class="card-header"> <b>Reciever Info</b> </div>
                                        <div class="card-body">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td> <b> Reciever Branch: </b><br> <input type="text" class="form-control" name="rbranch" placeholder="Reciever Branch" required /></td>
                                                    <td><b>Reciever Name: </b><br> <input type="text" class="form-control" name="rname" placeholder="Reciever Name" required /></td>
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
                                        <div class="card-header"> <b>Courier Details</b></div>
                                        <div class="card-body">
                                            <table class="table">
                                                <tr>
                                                    <td> <b> Courier Type :</b> <br>
                                                        <select name="ctype" id="" class="form-control">
                                                            <option value="">--Select Courier Type-</option>
                                                            <option value="Urgent">Urgent</option>
                                                            <option value="Regular">Regular</option>
                                                        </select>
                                                    </td>
                                                    <td><b>Quantity: </b><br> <input type="number" class="form-control" name="cqty" placeholder="Enter Weight" required /></td>
                                                    <td><b>Courier Fee:</b> <br> <input type="text" class="form-control" name="cfee" placeholder="Enter Fee For Courier" required /></td>
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
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>