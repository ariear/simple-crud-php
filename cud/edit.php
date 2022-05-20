<?php
    session_start();
    if (!isset($_SESSION['login'])) {
      echo "<script>location.href='http://localhost/simple-crud-php/auth/login.php'</script>";
    }
    
    require('../koneksi.php');

    if (!isset($_GET['id'])) {
        echo "<script>location.href='http://localhost/simple-crud-php/'</script>";
    }

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id = $id ");
    
    $buku = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav class="border-b shadow bg-blue-200">
    <div class="container mx-auto px-5 flex items-center justify-between py-5">
      <p class="text-3xl font-medium">Arie.</p>
      <div>
      <a href="http://localhost/simple-crud-php/auth/logout-action.php"><button class="py-2 px-7 rounded-xl text-white bg-red-400 font-medium">Logout</button></a>
      </div>
    </div>
    </nav>

    <p class="p-4 text-3xl font-medium">Edit Buku</p>

    <form action="/simple-crud-php/cud/edit-action.php" method="post">        
        <div class="p-4">
            <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $buku['id']; ?>" id="">
            <input type="text" name="judul" placeholder="Judul" class="input input-bordered input-primary w-full max-w-xs" value="<?php echo $buku['judul']; ?>" required />
            </div>
            <div class="mb-3">
            <input type="text" name="kategori" placeholder="Kategori" class="input input-bordered input-primary w-full max-w-xs" value="<?php echo $buku['kategori']; ?>" required />
            </div>
            <div class="mb-3">
            <textarea name="keterangan" class="textarea textarea-primary" placeholder="Keterangan" required><?php echo $buku['keterangan']; ?></textarea>
            </div>
            <div class="mb-3">
            <input type="number" name="stok" placeholder="Stok" class="input input-bordered input-primary w-full max-w-xs" value="<?php echo $buku['stok']; ?>" required />
            </div>
            <div class="mb-3">
                <button type="submit" name="edit" class="btn btn-success">Edit</button>
            </div>
        </div>
    </form>
</body>
</html>