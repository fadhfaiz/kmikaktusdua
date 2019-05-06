<br><br>
<div class="container">
<a href="<?php echo base_url(); ?>article/artikel" style="color:white; text-decoration: none;">
<div class="card bg-dark text-white">
  <img class="card-img" id="card-article">
  <div class="card-img-overlay">
      <div class="container">
          <div class="card-body">
            <div id="card-article-text">
            <p class="card-title" style="font-size:28px">5 Fakta menarik tentang kaktus</p>
            <p class="card-text" style="font-size:15px">Last updated 3 mins ago</p>
            </div>
     </div>
     </div>
</div>
</a>
</div>

<section class="container">
	<br><br>
	<div class="card-deck my-3"><a href="<?php echo base_url(); ?>article/artikel" style="color:black; text-decoration: none;">

          <?php
                    foreach($artikelku as $a){
                         echo '
                         <a href="'. base_url().'article/artikel/'.$a->kode_artikel.'" style="color:black; text-decoration: none;">
                         <div class="card">
                              <img src="'. base_url().'gambar/'.$a->gambar.'" style="height:400px" class="card-img-top d-block w-100" alt="...">
                                   <div class="card-body">
                                   <h6 class="card-title">'.$a->judul.'</h6>
                                   <p class="card-text" style="font-size:12px">'.date("d-m-Y", $a->tanggal).'</p>
                                   </div>
                              </a>
                         </div>
                         ';
                    }
               ?>
     </div>
          
</section>

</div>