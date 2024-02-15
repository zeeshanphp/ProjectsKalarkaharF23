<?php
include 'db.php';
$message = "";
$id = $_GET['branch'];

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM members WHERE memberId='$id'");
    header('location: list_members.php');
}


$query = "SELECT * FROM members WHERE memberId='$id'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
include 'header.php';

?>

<div class="row">
    <div class="col-md-2 bg-dark bg-gradient text-white">

        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4>MANAGE BRANCHES</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table">

                    <tr class="table-active">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Remove Member</th>

                    </tr>
                    <?php if ($count > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <td style="vertical-align: middle;"><?php echo $row['fullname'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['email'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['phone'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['city'] ?></td>
                                <td style="vertical-align: middle;"> <a href="?delete=<?php echo $row['memberId'] ?>" class="btn btn-danger bg-gradient rounded">Delete Member</a> </td>
                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr>
                            <td colspan="5" class="text-danger"> <b> No Record Found</b></td>
                        </tr>
                    <?php }

                    ?>
                </table>
            </div>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>