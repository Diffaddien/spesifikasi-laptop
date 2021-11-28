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

<div class="container">
    <br/>
    <button><a href="/logout">Logout</a></button><br/>
    <h3><?php echo "Selamat ".$waktu.", ".$_SESSION['admin_username']; ?></h3>
    <br/>
    <button><a href="#">Tambahkan</a></button></br><br/>
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
                <a href="#">Edit </a>
                <a href="#"> Hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pemisah->links('laptop','pagination'); ?>

</div>