<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kota</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<h1>Tambah Kota</h1>
<form action="<?= site_url('city/prosestambah') ?>" method="post">
    <label>Nama</label>
    <input type="text" name="nama" /><br />
    <label>Kode negara</label>
    <select name="code">
        <?php
            foreach ($country->result() as $ctr) {
                echo '<option value="'.$ctr->Code.'">'.$ctr->Code.'</option>';
            }
        ?>
    </select><br />
    <label>District</label>
    <input type="text" name="area" /><br />
    <label>Populasi</label>
    <input type="text" name="populasi" /><br />
    <button type="submit">Tambah</button>
</form>
    
</body>
</html>
