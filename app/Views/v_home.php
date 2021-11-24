<div id="wrapper">
    <br/><h2><center>Pilih Brand Laptop</center></h2>

    <div class="brand"><center>
        <img class="rekayasaB" src="/assets/images/acer.png" ></img>
        <img class="rekayasaB" src="/assets/images/asus_logo.jpg"></img>
        <img class="rekayasaB" style="width: 200px !important; padding:0px !important" src="/assets/images/lenovo_logo.jpg"></img>
        <img class="rekayasaB" style="width: 190px !important; padding:0px !important" src="/assets/images/xiaomi_logo.jpg"></img>
</center></div><br/>
    <center><b>Telusuri Laptop</b></center><br/>
	
    <div class="layout-card">
	<?php $i=1; foreach ($laptop as $r):?>  
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
	<?php endforeach;?> 
	</div>
	
 </div>

</div>