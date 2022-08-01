<?php
include 'koneksi.php';
$id = $_GET['id'];
if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sql = "UPDATE produk SET nama_produk = '$nama', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' WHERE id = '$id'";
    mysqli_query($koneksi, $sql);
    header('Location: index.php');
}

$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$data = mysqli_fetch_assoc($query)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="" method="post">
        <p>Nama Produk</p>
        <input type="text" name="nama" value="<?= $data['nama_produk']?>">
        <p>Keterangan</p>
        <input type="text" name="keterangan" value="<?= $data['keterangan']?>">
        <p>Harga</p>
        <input type="number" name="harga" value="<?= $data['harga']?>">
        <p>Jumlah</p>
        <input type="number" name="jumlah" value="<?= $data['jumlah']?>">
        <p></p>
        <button type="submit" name="edit">Edit</button>
    </form>
</body>
</html>