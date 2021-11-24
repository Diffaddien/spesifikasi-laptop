<div id="wrapper">
    <br/><h2><center>Pilih Brand Laptop</center></h2>

    <div class="brand">
    
    <center>
         <a href="merk/asus"><img class="rekayasaB" src="/assets/images/Asus_logo.jpg" ></img></a>
        <a href="merk/acer"><img class="rekayasaB" src="/assets/images/Acer_logo.jpg" ></img></a>
        <a href="merk/lenovo"><img class="rekayasaB" src="/assets/images/Lenovo_logo.jpg" ></img></a>
        <a href="merk/xiaomi"><img class="rekayasaB" src="/assets/images/Xiaomi_logo.jpg" ></img></a>

    </center>
     
    </div><br/>
    <center><h3>Daftar Laptop Lenovo</h3></center><br/>

    <div class="layout-card">
	<?php $i=1; foreach ($laptop as $r):?>
    
    <?php if($r['merk'] == "Lenovo"): ?>
	<div class="card">
	     <div class="head-card">
		  <img src="/assets/images/<?=$r['gambar'];?>" alt="">
	     </div>
	     <div class="body-card">
		  <h1><?=$r['model'];?></h1>
		  <p>
            <b>Prosessor: </b><?=$r['processor'];?><br/>
            <b>RAM: </b><?=$r['ram'];?><br/>
            <b>Storage: </b><?=$r['disk'];?>
          </p>
		  <a href="#"><svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
	     </div>
	</div>
    <?php endif ?>
	<?php endforeach;?> 
	</div>
	
 </div>

</div>