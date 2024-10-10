<?php
session_start();
$server = "mysql:host=localhost;dbname=sufyandb";
$userName = "root";
$password="";
$pdo = new PDO($server,$userName,$password);
?>