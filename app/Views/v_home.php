<div id="wrapper">
    <br/><h2 style="color: #344"><center>Pilih Brand Laptop</center></h2>

    <div class="brand">
    
    <center>
    <?php foreach ($brand as $r):?>      
        <a href="<?= base_url($r["nama_brand"])?>"><img class="rekayasaB <?= \Config\Services::request()->uri->getSegment(1) == $r["nama_brand"] ? 'b_active' : '' ?>" src="/assets/images/logo/<?=$r["nama_brand"]?>_logo.jpg" ></img></a>
    <?php endforeach;?>     
    </center>
     
    </div><br/>
	<center><h3 style="color: #344">Telusuri Laptop <?= $pilih; ?></h3></center><br/>

    <div class="layout-card">
	<?php foreach ($laptop as $r):?>
    
    <?php if($r['brand'] == $pilih): ?>
	<div class="card">
	    <div class="head-card">
			<img src="/assets/images/laptop/<?=$r['gambar'];?>" alt="">
	    </div>
	    <div class="body-card ">
		  	<h2><?=$r['model'];?></h2>
			<p>
            <b>Prosessor</b>: <?=$r['processor'];?><br/>
            <b>RAM</b>: <?=$r['ram'];?><br/>
            <b>Storage</b>: <?=$r['disk'];?>
        	</p>
			<span class="bar_munculan" data-tooltip="Klik Tanda &rarr; Untuk Lihat Lebih Lengkap">
		  	<a href="#"><svg class="w-6 h-6 anim" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
			</span>
		</div>
	</div>
    <?php endif ?>
    <?php if($pilih == "all"): ?>
	<div class="card">
	    <div class="head-card">
		  <img src="/assets/images/laptop/<?=$r['gambar'];?>" alt="">
	    </div>
	    <div class="body-card">
		<h2><?=$r['model'];?></h2>
		<p>
        	<b>Prosessor</b>: <?=$r['processor'];?><br/>
            <b>RAM</b>: <?=$r['ram'];?><br/>
            <b>Storage</b>: <?=$r['disk'];?>
        </p>
		<span class="bar_munculan" data-tooltip="Klik tanda panah untuk lihat lebih lengkap">
		  	<a href="#"><svg class="w-6 h-6 anim" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
		</span>
		</div>
	</div>
    <?php endif ?>

	<?php endforeach;?> 
	</div>
	
 </div>

</div>