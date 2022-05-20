<?php
    session_start();
    if (!isset($_SESSION['login'])) {
      echo "<script>location.href='http://localhost/simple-crud-php/auth/login.php'</script>";
    }

    require('koneksi.php');
    require('cud/hapus-action.php');

    if (isset($_GET['search'])) {
      $search = $_GET['search'];
      $bukus = mysqli_query($conn,"SELECT * FROM buku WHERE judul LIKE '%" . $search . "%' ");
    }else {
      $bukus = mysqli_query($conn,'SELECT * FROM buku');
    }
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
        <a href="auth/logout-action.php"><button class="py-2 px-7 rounded-xl text-white bg-red-400 font-medium">Logout</button></a>
      </div>
    </div>
    </nav>

    <div class="px-8 pb-5 pt-10 flex justify-between">
        <a href="/simple-crud-php/cud/create.php"><button class="btn btn-primary">Tambah Buku</button></a>
        <form action="index.php" method="get">
        <div class="form-control">
         <div class="input-group">
          <input type="text" name="search" placeholder="Cari Judul" value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>" class="input input-bordered" />
          <button class="btn btn-square">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
          </button>
        </div>
      </div>
      </form>
    </div>
    <?php if (isset($_GET['status'])) { ?>
    <?php if ($_GET['status'] == 'sukses') { ?>
      <!-- alert -->
      <div class="alert alert-success shadow-lg px-10 w-max ml-5">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Buku Berhasil Ditambahkan</span>
      </div>
      </div>
      <!-- end alert -->
    <?php }else { ?>
      <div class="alert alert-error shadow-lg px-10 w-max ml-5">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Buku Gagal DiTambahkan</span>
      </div>
      </div>
    <?php } ?>
    <?php } ?>
    <div class="overflow-x-auto p-5">
  <table class="table table-zebra w-full">
    <thead>
      <tr>
        <th>Id</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($bukus as $key => $buku) { ?>
      <tr>
        <th><?php echo $key + 1 ?></th>
        <td><?php echo $buku['judul'] ?></td>
        <td><?php echo $buku['kategori'] ?></td>
        <td><?php echo $buku['keterangan'] ?></td>
        <td><?php echo $buku['stok'] ?></td>
        <td>
            <?php echo '<a href="http://localhost/simple-crud-php/cud/edit.php/?id=' . $buku['id'] . '"><button class="btn btn-warning text-white">Edit</button></a>'; ?>
            <?php echo '<a href="http://localhost/simple-crud-php/?id=' . $buku['id'] . '"><button class="btn btn-error text-white">Hapus</button></a>'; ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>