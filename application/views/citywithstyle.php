<html>
<head>
    <title>Daftar Kota</title>
    
    
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/jquery.dataTables.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap-4.0.0-dist/css/bootstrap.min.css') ?>"/>

    
    <script src="<?= base_url('assets/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery.dataTables.min.js') ?>"></script>

</head>
<body>
    <h1 align="center" class="pt-3" >Daftar Kota</h1>
    <table id = "myTable" class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Nama</th>
        <th scope="col">Negara</th>
        <th scope="col">Populasi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($city as $ct) : ?>
        <tr>
        <td><?= $ct['Name']; ?></td>
        <td><?= $ct['CountryCode']; ?></td>
        <td><?= $ct['Population']; ?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
    <script>
        $(document).ready(function() {
        $('#myTable').DataTable();
        });
    </script> 
</body>
</html> 
