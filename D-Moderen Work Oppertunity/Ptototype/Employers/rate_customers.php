<?php
include 'db.php';
session_start();
$message = "";

$query = "SELECT * FROM customers";
$result = mysqli_query($conn, $query);
if (isset($_POST['add_rating'])) {
    $customerId = $_POST['userId'];;
    $rating = $_POST['rating'];;
    $employerId = $_SESSION['employer'];
    $query = "INSERT INTO ratings(rating,custId,employerId) VALUES ('$rating' , '$customerId' , '$employerId')";
    mysqli_query($conn, $query);
    header('location: rate_customers.php');
}
include 'header.php';

?>

<div class="row px-0 mx-0">
    <div class="col-md-2 bg-primary text-white">
        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="row">

            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-3 mt-3" style="height: 320px;">
                    <div class="card">

                        <div class="card-body">
                            <table class="table-borderless">
                                <tr>
                                    <td>Fullname</td>
                                    <td class="text-wrap"><?php echo $row['fullname'] ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td><?php echo $row['username'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $row['username'] ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $sql = "SELECT AVG(rating) as average_rating FROM ratings WHERE custId =" . $row['custId'];
                                        $result_av = mysqli_query($conn, $sql);
                                        $average_rating = mysqli_fetch_assoc($result_av);
                                        ?>
                                        <div class="rateYo" data-rateYo-rating='<?php echo $average_rating['average_rating'] ?>'>
                                        </div>
                                        <form action="" method="post">

                                            <input type="hidden" name="rating" class="rating">
                                            <input type="hidden" name="userId" value="<?php echo $row['custId']; ?>">
                                            <br>
                                            <input type="submit" value="Give Rating" name="add_rating" class="btn btn-info bg-gradient w-100">
                                        </form>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>


    </div>
</div>
<?php
include 'footer.php';
?>