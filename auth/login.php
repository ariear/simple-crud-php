<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<script>location.href='http://localhost/simple-crud-php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="h-screen flex justify-center items-center">
        <div class="border shadow-sm rounded-xl w-max p-4">
            <form action="login-action.php" method="post">
            <div class="mb-8">
                <p class="text-2xl text-center font-medium">Form Login</p>
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="masukkan email" class="input input-bordered input-primary w-[250px] max-w-xs" />
            </div>
            <div class="mb-8">
                <input type="password" name="password" placeholder="masukkan password" class="input input-bordered input-primary w-[250px] max-w-xs" />
            </div>
            <div>
                <button type="submit" name="login" class="py-2 px-7 font-medium w-full mb-2 rounded-lg bg-blue-400 text-white shadow border">Login</button>
                <a href="register.php" class="text-blue-600 text-sm">Belum punya akun?</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>