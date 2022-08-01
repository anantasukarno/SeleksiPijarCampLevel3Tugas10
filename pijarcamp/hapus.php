<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id='$id'";
mysqli_query($koneksi, $sql);
header('Location: index.php');

?>