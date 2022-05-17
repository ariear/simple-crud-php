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

    <div class="p-4">
        <div class="mb-3">
        <input type="text" placeholder="Judul" class="input input-bordered input-primary w-full max-w-xs" />
        </div>
        <div class="mb-3">
        <input type="text" placeholder="Kategori" class="input input-bordered input-primary w-full max-w-xs" />
        </div>
        <div class="mb-3">
        <textarea class="textarea textarea-primary" placeholder="Keterangan"></textarea>
        </div>
        <div class="mb-3">
        <input type="number" placeholder="Stok" class="input input-bordered input-primary w-full max-w-xs" />
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
    </div>
</body>
</html>