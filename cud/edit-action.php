<?php
    require('../koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $keterangan = $_POST['keterangan'];
        $stok = $_POST['stok'];

        $query = mysqli_query($conn, "UPDATE buku SET judul='$judul', kategori='$kategori' , keterangan='$keterangan' , stok='$stok' WHERE id = $id ");

        if ($query) {
            echo "<script>location.href='http://localhost/simple-crud-php/'</script>";
        }else {
            echo "<script>location.href='http://localhost/simple-crud-php/cud/edit.php/?id=$id'</script>";
        }
    }
?>