<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = mysqli_query($conn,"DELETE FROM buku WHERE id=$id");

        if ($query) {
            echo "<script>location.href='http://localhost/simple-crud-php';</script>";
        }else {
            echo "<script>location.href='http://localhost/simple-crud-php';</script>";
        }
    }

?>