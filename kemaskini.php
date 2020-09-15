<?php
require 'mysqli.php';
$idlogin = $_POST['idlogin'];
$nama = $_POST['Username'];
$harga = $_POST['Password'];
$sql = "UPDATE login SET Username = ?, Password = ? WHERE idlogin = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sdi', $Username, $Password, $idlogin);
$stmt->execute();
if ($mysqli->error) {
 ?>
 <script>
 alert('Maaf! Username dan Password tersebut sudah wujud dalam senarai');
 window.location = 'index.php';
 </script>
 <?php
 exit;
} else {
 header('location: index.php');
}