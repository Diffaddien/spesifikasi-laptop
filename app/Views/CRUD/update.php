
<div class="container">
<div class="kotak_form">
    <h2 class="tulisan_form">
    Ubah Data Tabel
    </h2>

<div class="card-body">
    <form action="<?=base_url('Crud/ubah/'.$data["laptop_id"])?>" method="post">
    <input type="text" placeholder="Bahasa Lampung" name="laptop_id" value="<?=$data["laptop_id"]?>" class="form_text"><br/>
    <input type="text" placeholder="Bahasa Indonesia" name="model" value="<?=$data["model"]?>" class="form_text"><br/>
    <input type="text" name="brand" value="<?=$data["brand"]?>" class="form_text"><br/>
    <input type="text" name="processor" value="<?=$data["processor"]?>" class="form_text"><br/>
    <input type="text" name="gpu" value="<?=$data["gpu"]?>" class="form_text"><br/>
    <input type="text" name="ram" value="<?=$data["ram"]?>" class="form_text"><br/>
    <input type="text" name="disk" value="<?=$data["disk"]?>" class="form_text"><br/>
    <input type="text" name="layar" value="<?=$data["layar"]?>" class="form_text"><br/>
    <input type="text" name="baterai" value="<?=$data["baterai"]?>" class="form_text"><br/>
    <input type="text" name="gambar" value="<?=$data["gambar"]?>" class="form_text"><br/>
    <button type="submit">Simpan</button>
    </form>
</div>    

</div>
</div>   

