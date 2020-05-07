<html>
<head>
    <title>Daftar Negara</title>
</head>
<body>
    <h1 align="center">Daftar Negara</h1>
    <table border="1" align="center">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Continent</th>
        <th>Region</th>
        <th></th>
    </tr>
    <?php
    foreach($country->result() as $row){
        $edit = '<a href="'.site_url("country/update/".$row->Code).'">Edit</a>';
        $hapus = '<a href="'.site_url("country/hapus/".$row->Code).'">Hapus</a>'; 
        echo "<tr>";
        echo "<td>$row->Code</td>";
        echo "<td>$row->Name</td>"; 
        echo "<td>$row->Continent</td>"; 
        echo "<td>$row->Region</td>"; 
        echo "<td>$edit  |  $hapus</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html> 
