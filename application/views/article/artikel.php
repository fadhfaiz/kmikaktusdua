<br>
  <div class="container">
        <div class="row">
           <h1><?php echo $artikelku->judul;?></h1>
        </div>
        <div class="row">
           <div class="col"><h4 style="text-align:right"><?php echo $artikelku->tanggal;?></h4></div>
        </div>
        <div class="row">
          <center>
          <div class="col-lg-9">
              <div class="card bg-dark" >
                <img src="<?php echo base_url().'gambar/'.$artikelku->gambar?>" class="img-fluid" alt="Responsive image">
              </div>
          </div>
          </center>
        </div>
        <div class="row">
          <div class="col mt-4 mb-4">
          <div id="artikel">
          <?php echo $artikelku->isi;?>
          </div>
          </div>
  </div>

