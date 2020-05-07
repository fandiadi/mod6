<html>
<head>
    <title>Daftar Bahasa Tiap Negara</title>
</head>
<body>
    <h1 align="center">Daftar Bahasa Tiap Negara</h1>
    <table border="1" align="center">
    <tr>
        <th>Kode Negara</th>
        <th>Nama Negara</th>
        <th>Bahasa</th>
    </tr>
    <?php foreach($countryL as $ctr): ?>
    <tr>
        <td><?= $ctr['CountryCode']; ?></td>
        <td><?= $ctr['Name']; ?></td>
        <td><?= $ctr['Language']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html> 
