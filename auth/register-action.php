<?php
    require('../koneksi.php');

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = mysqli_query($conn, "INSERT INTO user (nama,email,password) VALUE ('$nama','$email','$password')");
        
        if ($query) {
            echo "<script>location.href='http://localhost/simple-crud-php/auth/login.php'</script>";
        }else {
            echo "<script>location.href='http://localhost/simple-crud-php/auth/register.php'</script>";
        }
    }
?>