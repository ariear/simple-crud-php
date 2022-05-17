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
    <p class="p-4 text-3xl font-medium">Tambah Buku</p>

    <form action="/simple-crud-php/cud/create-action.php" method="post">        
        <div class="p-4">
            <div class="mb-3">
            <input type="text" name="judul" placeholder="Judul" class="input input-bordered input-primary w-full max-w-xs" required />
            </div>
            <div class="mb-3">
            <input type="text" name="kategori" placeholder="Kategori" class="input input-bordered input-primary w-full max-w-xs" required />
            </div>
            <div class="mb-3">
            <textarea name="keterangan" class="textarea textarea-primary" placeholder="Keterangan" required></textarea>
            </div>
            <div class="mb-3">
            <input type="number" name="stok" placeholder="Stok" class="input input-bordered input-primary w-full max-w-xs" required />
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
            </div>
        </div>
    </form>
</body>
</html>