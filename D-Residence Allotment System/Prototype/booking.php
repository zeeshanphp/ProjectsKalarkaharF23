<?php
session_start();
include 'db.php';
if (empty($_SESSION['teanant'])) {
    header("Location: login.php");
} else {
    include 'header.php';
    $id = $_GET['roomId'];
    $teanant = $_SESSION['teanant'];
    $query = "INSERT INTO bookings(roomId,teanantId)VALUES('$id' , '$teanant')";
    if (mysqli_query($conn, $query)) {
        header('Location:view_bookings.php');
    }
}
