<?php include 'db.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Courier Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Calibri !important;
        }

        ul li a {
            color: rgba(160, 85, 146, 1);
        }

        .cust-btn {
            background-color: rgb(242 30 38/1);
            color: white;
        }

        .cust-btn:hover {
            background-color: rgb(242 30 38/0.9);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <ul class="nav nav-fill py-2 w-100 bg-gradient" style="background-color: rgb(242 30 38/1);">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="track_shipment.php">Track Shipment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About Us</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu cust-btn" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item cust-btn" href="Admin/">Admin</a></li>
                    <li><a class="dropdown-item cust-btn" href="Manager/">Branch Manager</a></li>
                </ul>
            </li>

        </ul>