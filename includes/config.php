<?php
ob_start(); // turns on output buffering
session_start();

date_default_timezone_set("America/New_York");

try {
    $con = new PDO("mysql:dbname=gemflix;host=localhost", "root", ""); // connect to database using localhost, username, and password
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // setting error reporting
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage()); // giving error message to user
}
?>