<?php
require 'mysqli.php';
$idlogin = $_GET['idlogin'];
$sql = "DELETE FROM login WHERE idlogin = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $idlogin);
$stmt->execute();
header('location: index.php');