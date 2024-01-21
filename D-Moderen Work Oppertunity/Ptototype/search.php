<?php
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Work Oppertunity</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container-fluid bg-banner">
        <div class="row">
            <div class="col-md-4 py-3">
                <img src="images/logo.jpg" alt="" height="80px" width="180px">
            </div>
            <div class="col-md-8 float-end py-3">
                <table class="table table-borderless">
                    <tr>
                        <td style="height: 50px;"><input type="text" class="form-control" name="" placeholder="Search Jobs , Keywords , Companies" required style="height: 50px;" /></td>
                        <td style="height: 50px;"><input type="text" class="form-control" name="" placeholder="Enter Location Or Remote" required style="height: 50px;" /></td>
                        <td>
                            <button type="submit" name="" class="btn btn-signup w-100" style="height: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg> </button>
                        </td>
                    </tr>
                </table>

            </div>

        </div>
    </div>
    <?php include 'nav.php' ?>
    <div class="container-fluid">
        <center>
            <h1 class="py-5 text-color mx-auto text-gradient"><b>SEARCH JOBS</b></h1>
        </center>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="text-success"> <b> NO JOB UPLOADED YET </b></p>
            </div>
        </div>
    </div>
</body>

</html>