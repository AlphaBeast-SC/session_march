<?php
session_start();
if(!isset($_SESSION["userName"])){
 header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p>Hello <span> User <?php echo $_SESSION["userName"]; ?></span></p>
    <br>
    <a href="dashboard.php"> Home</a>
    <a href="Report.php"> Report</a>
    <a href="logout.php">Logout</a>
<br><br>