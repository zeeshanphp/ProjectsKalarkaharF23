<?php
include 'db.php';
session_start();
$result = mysqli_query($conn, "SELECT * FROM company");
if (isset($_POST['add_rating'])) {
    if (empty($_SESSION['uid'])) {
        echo "<script>alert('Please Login To Continue'); window.location.href = 'login.php';</script>";
    } else {
        $customerId = $_SESSION['uid'];
        $rating = $_POST['rating'];
        $companyId = $_POST['companyId'];
        $query = "INSERT INTO company_rating (rating,custId,companyId) VALUES ('$rating' , '$customerId' , '$companyId')";
        mysqli_query($conn, $query);
        header('location: companies.php');
    }
}
include 'header.php'
?>
<div class="container">
    <div class="row mt-4">

        <?php while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">
                        <?php echo $row['cname'] ?>
                    </div>
                    <img src="Employers/images/<?php echo $row['cphoto']; ?>" class="card-img-top rounded-circle" alt="..." width="100" height="150">

                    <div class="card-body">
                        <p><?php echo $row['cemail'] ?></p>
                        <p><?php echo $row['ccontact'] ?></p>
                    </div>
                    <div class="card-footer">
                        <?php
                        $sql = "SELECT AVG(rating) as average_rating
                        FROM company_rating
                        WHERE companyId =" . $row['companyId'];
                        $result_av = mysqli_query($conn, $sql);
                        $average_rating = mysqli_fetch_assoc($result_av);
                        ?>
                        <div class="rateYo" data-rateYo-rating="<?php echo $average_rating['average_rating'] ?>">
                        </div>
                        <form action="" method="post">
                            <input type="hidden" name="rating" class="rating" value="">
                            <input type="hidden" name="companyId" value="<?php echo $row['companyId'] ?>">
                            <br>
                            <input type="submit" value="Give Rating" name="add_rating" class="btn btn-info w-100">
                        </form>

                    </div>
                </div>

            </div>

        <?php } ?>
    </div>
</div>

<?php
include 'footer.php'
?>