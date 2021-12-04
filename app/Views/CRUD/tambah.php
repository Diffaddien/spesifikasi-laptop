<div class="container">
<div class="kotak_form">
    <h2 class="tulisan_form">
    Input Data Tabel Laptop
    </h2>

<div class="card-body">
    <form action="<?= base_url('Crud/tambah')?>" method="post">
    <input type="number" name="laptop_id" class="form_text" placeholder="ID Data"><br/>
    <input type="text" name="model" class="form_text" placeholder="Model Laptop"><br/>
    <input type="text" name="brand" class="form_text" placeholder="Brand Laptop"><br/>
    <input type="text" name="processor" class="form_text" placeholder="Processor"><br/>
    <input type="text" name="gpu" class="form_text" placeholder="GPU"><br/>
    <input type="text" name="ram" class="form_text" placeholder="RAM"><br/>
    <input type="text" name="disk" class="form_text" placeholder="Penyimpanan"><br/>
    <input type="text" name="layar" class="form_text" placeholder="Layar"><br/>
    <input type="text" name="baterai" class="form_text" placeholder="Baterai"><br/>
    <input type="text" name="gambar" class="form_text" placeholder="Nama file gambar"><br/>
    <button type="submit" class="tombol_sunmit" placeholder="">Simpan</button>
    </form>
</div>    

</div>
</div>    