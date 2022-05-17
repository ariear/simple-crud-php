<?php
    require('koneksi.php');

    $bukus = mysqli_query($conn,'SELECT * FROM buku');
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
    <div class="p-5">
        <a href="/crud-simpel/cud/create.php"><button class="btn btn-primary">Tambah Buku</button></a>
    </div>
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
        <th><?php echo $buku['id'] ?></th>
        <td><?php echo $buku['judul'] ?></td>
        <td><?php echo $buku['kategori'] ?></td>
        <td><?php echo $buku['keterangan'] ?></td>
        <td><?php echo $buku['stok'] ?></td>
        <td>
            <button class="btn btn-warning text-white">Edit</button>
            <button class="btn btn-error text-white">Hapus</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>