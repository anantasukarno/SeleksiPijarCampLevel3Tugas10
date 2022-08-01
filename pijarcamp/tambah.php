<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sql = "INSERT INTO produk (id, nama_produk, keterangan, harga, jumlah) VALUES ('', '$nama' , '$keterangan', '$harga', '$jumlah')";
    mysqli_query($koneksi, $sql);
    
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="" method="post">
        <p>Nama Produk</p>
        <input type="text" name="nama">
        <p>Keterangan</p>
        <input type="text" name="keterangan">
        <p>Harga</p>
        <input type="number" name="harga">
        <p>Jumlah</p>
        <input type="number" name="jumlah">
        <p></p>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>