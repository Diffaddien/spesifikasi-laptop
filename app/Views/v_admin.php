<?php
date_default_timezone_set("Etc/GMT-7");
$jam = ((int)date("H"));
$waktu = "";
if ($jam > 3 and $jam <=9){
	$waktu = "Pagi";
} else if($jam>9 and $jam <=14){
	$waktu = "Siang";
} else if($jam>14 and $jam <=17){
	$waktu = "Sore";
} else { $waktu = "Malam"; }
?>

<div class="container-top" style="min-height: 10px!important; text-align: right; box-shadow:none">
    <button><a href="/logout">Logout &rarr;</a></button><br/>
</div>
<div class="container">
    <br/>
    
    <h3><?php echo "Selamat ".$waktu.", ".$_SESSION['admin_username']; ?></h3>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Flowz</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Data</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Users</span>
      </div>
    </div>
    </div>
    
    <button><a href="<?= base_url('Crud/form_tambah')?>">Tambahkan</a></button></br><br/>
    <table>
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Model</th>
                <th scope="col">Prosessor</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
            <?php $nomor = 1; ?>
            <?php foreach ($laptop as $lpt) : ?>
        <tbody>
            <tr>
                <td scope="row"><?= $lpt['laptop_id']; ?></td>
                <td><?= $lpt['model']; ?></td>
                <td><?= $lpt['processor']; ?></td>
                <td>
                <button><a href="<?=base_url("Crud/form_ubah/".$lpt['laptop_id']);?>">Ubah</a></button>
                <button><a href="<?=base_url("Crud/hapus/".$lpt['laptop_id']);?>">Hapus</a></button>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pemisah->links('laptop','pagination'); ?>

</div>