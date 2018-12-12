<?php
session_start();

include 'dbConnection.php';
$dbConn = startConnection("ottercars");
include 'functions.php';
validateSession();

$sql = "DELETE FROM oc_autos WHERE productId = " . $_GET['productId'];
$stmt=$dbConn->prepare($sql);
$stmt->execute();

header("Location: admin.php");



?>