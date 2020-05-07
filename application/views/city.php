<html>
<head>
    <title>Daftar Kota</title>
</head>
<body>
    <h1 align="center">Daftar Kota</h1>
    <table border="1" align="center">
    <tr>
        <th>Nama</th>
        <th>Negara</th>
        <th>Populasi</th>
        <th></th>
    </tr>
    <?php
    foreach($city->result() as $row){
        $edit = '<a href="'.site_url("city/update/".$row->ID).'">Edit</a>';
        $hapus = '<a href="'.site_url("city/hapus/".$row->ID).'">Hapus</a>'; 
        echo "<tr>";
        echo "<td>$row->Name</td>";
        echo "<td>$row->CountryCode</td>"; 
        echo "<td>$row->Population</td>"; 
        echo "<td>$edit  |  $hapus</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html> 
