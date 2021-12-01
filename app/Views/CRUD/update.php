<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Tabel</title>
</head>
<body>

<h3>Update Spek</h3>

    <form action="<?=base_url('Crud/ubah/'.$data["laptop_id"])?>" method="post">
    <input type="text" placeholder="Bahasa Lampung" name="laptop_id" value="<?=$data["laptop_id"]?>"><br/>
    <input type="text" placeholder="Bahasa Indonesia" name="model" value="<?=$data["model"]?>">
    
    <input type="text" name="brand" value="<?=$data["brand"]?>"><br/>
    <input type="text" name="processor" value="<?=$data["processor"]?>"><br/>
    <input type="text" name="gpu" value="<?=$data["gpu"]?>"><br/>
    <input type="text" name="ram" value="<?=$data["ram"]?>"><br/>
    <input type="text" name="disk" value="<?=$data["disk"]?>"><br/>
    <input type="text" name="layar" value="<?=$data["layar"]?>"><br/>
    <input type="text" name="baterai" value="<?=$data["baterai"]?>"><br/>
    <input type="text" name="gambar" value="<?=$data["gambar"]?>"><br/>
    <button type="submit">Simpan</button>
    </form>

</body>
</html>