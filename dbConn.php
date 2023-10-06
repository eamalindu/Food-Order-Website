<?php
$server = "localhost";
$user = "root";
$pwd = "";
$database = "kottu_palace";

$conn = new mysqli($server,$user,$pwd,$database);
if ($conn->connect_error) {
    die("Failed to Connect to mysql ".$conn->connect_error);
}
?>