<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Tabel</title>
</head>
<body>

<h3>Input Laptop</h3>
    <form action="<?= base_url('Crud/tambah')?>" method="post">
    <input type="number" name="laptop_id"><br/>
    <input type="text" name="model"><br/>
    <input type="text" name="brand"><br/>
    <input type="text" name="processor"><br/>
    <input type="text" name="gpu"><br/>
    <input type="text" name="ram"><br/>
    <input type="text" name="disk"><br/>
    <input type="text" name="layar"><br/>
    <input type="text" name="baterai"><br/>
    <input type="text" name="gambar"><br/>
    <button type="submit">Simpan</button>
    </form>


</body>
</html>