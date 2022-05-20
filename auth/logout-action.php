<?php
    session_start();
    session_destroy();

    echo "<script>location.href='http://localhost/simple-crud-php/auth/login.php'</script>";
?>