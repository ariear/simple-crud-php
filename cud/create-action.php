<?php
    require('../koneksi.php');

    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $keterangan = $_POST['keterangan'];
        $stok = $_POST['stok'];

        $query = mysqli_query($conn,"INSERT INTO buku (judul,kategori,keterangan,stok) VALUE ('$judul','$kategori','$keterangan','$stok')");

        if ($query) {
            echo "<script>location.href='http://localhost/simple-crud-php/?status=sukses';</script>";
        }else {
            header('Location : http://localhost/simple-crud-php/cud/create.php');
        }
    }
?>
