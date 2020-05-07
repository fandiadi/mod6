<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Negara</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<h1>Tambah Negara</h1>

<form action="<?= site_url('country/prosestambah') ?>" method="post">
    <label>Code</label>
    <input type="text" name="code" /><br />
    <label>Name</label>
    <input type="text" name="name" /><br />
    <label>Region</label>
    <input type="text" name="region" /><br />
    <button type="submit">Tambah</button>
</form>
    
</body>
</html>