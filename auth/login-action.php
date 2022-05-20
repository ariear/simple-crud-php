<?php
    session_start();
    require('../koneksi.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
        $userquery = mysqli_fetch_assoc($query);

        if (password_verify($password, $userquery['password'])) {
            $_SESSION['login'] = $userquery['nama'];
            echo "<script>location.href='http://localhost/simple-crud-php/'</script>";
        }else{
            echo "<script>location.href='http://localhost/simple-crud-php/auth/login.php'</script>";
        }
    }
?>