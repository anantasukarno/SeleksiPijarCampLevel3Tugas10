<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="tambah.php"><button>Tambah Produk</button></a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($koneksi, 'SELECT * FROM produk');
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['keterangan'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><button><a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a></button><button><a href="hapus.php?id=<?php echo $data['id'] ?>">Hapus</a></button></td>
                </tr>
        <?php } ?>
    </table>
</body>
</html>