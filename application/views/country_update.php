<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Negara</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Update Negara</h1>
    <form action="<?= site_url('Country/prosesupdate/'.$country->Code) ?>" method="post">
        <label>Code</label>
        <input type="text" name="code" value="<?= $country->Code ?>" disabled /><br>
        <label>Name</label>
        <input type="text" name="name" value="<?= $country->Name ?>" /><br>
        <label>Region</label>
        <input type="text" name="region" value="<?= $country->Region ?>" /><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>