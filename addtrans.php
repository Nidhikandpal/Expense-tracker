<?php

session_start();

include 'db.php';

$user_id = $_SESSION['user_id'];

$amount = $_POST['amount'];
$category = $_POST['category'];
$type = $_POST['type'];
$date = $_POST['date'];
$notes = $_POST['notes'];

$sql = "INSERT INTO transactions
(user_id, amount, category, type, date, notes)

VALUES

('$user_id','$amount','$category',
'$type','$date','$notes')";

mysqli_query($conn,$sql);

header("Location: dashboard.php");

?>