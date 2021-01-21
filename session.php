<?php
include('dbconnection.php');
session_start();

$user_check = $_SESSION['login_user'];

$mysqli= mysqli_query($mysqli,"select fullname from login where fullname = '$user_check' ");

$row = mysqli_fetch_array($mysqli,MYSQLI_ASSOC);

$login_session = $row['fullname'];

if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
}
?>
