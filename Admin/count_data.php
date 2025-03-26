<?php
include 'Connection.php';

// Fetch total users
$query_users = "SELECT COUNT(*) AS total_users FROM users";
$result_users = mysqli_query($conn, $query_users);
$row_users = mysqli_fetch_assoc($result_users);
$total_users = $row_users['total_users'];

// Fetch total bookings
$query_bookings = "SELECT COUNT(*) AS total_bookings FROM bookings";
$result_bookings = mysqli_query($conn, $query_bookings);
$row_bookings = mysqli_fetch_assoc($result_bookings);
$total_bookings = $row_bookings['total_bookings'];
?>