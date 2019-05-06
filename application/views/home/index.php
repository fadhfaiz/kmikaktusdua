<header>
	<div id="home" class="">
		<div id="landing-text">
			<div class="container">
				<h1 id="txt-satu" class="text-left font-weight-bold">KaktusKmi Jogja</h1>
				<h5 class="text-left my-4 font-italic">Menjual tanaman seperti Kaktus, Sansivera, Aglonema.
				</h5>
				<!-- <a href="#" class="btn btn-warning mt-4">Marketplace</a> -->
				<a href="<?php echo base_url(); ?>marketplace/index" class="btn btn-lg btn-outline-light mt-5"> Go To
					Marketplace <i class="fas fa-arrow-circle-right fa-lg mx-2"></i></a>
			</div>
		</div>
	</div>
</header>

<section class="container">
	<div class="container my-5">
		<div class="card-deck">

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/pot_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Pot Tanaman</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/bibit_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Bibit Tanaman</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.
						</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/batu_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Batu Tanaman</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>
			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/paket_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Paket</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<a href="https://www.instagram.com/fadh.leather/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a>

	<a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>

</section>

<section class="container">
	<div class="row">
		<div class="col-4"><hr></div>
		<div class="col-4">
			<h4 class="text-center">Produk Terbaru</h4>
		</div>
		<div class="col-4"><hr></div>
	</div>
	<div class="card-deck my-3">
		
			<?php
				foreach($produk as $p){
					echo '
					<div class="card">
							<a href="'.base_url().'home/detail_tanaman/'.$p->kode_produk.'"><img
									src="'.base_url().'assets/img/'.$p->gambar.'" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title">'.$p->nama_produk.'</h6>
								</div>
							</a>
							<div class="card-footer">
								<small class="text-muted">Rp. '.$p->harga_produk.'</small>
							</div>
						</div>
					';
				}
			?>
	</div>
	<div class="my-4">
		<a href="<?php echo base_url(); ?>marketplace/index" class="btn btn-block btn-warning">Lihat Produk lainnya</a>
	</div>
</section>

<section class="container">
	<div class="container my-5">
		<div class="card-deck">

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/kaktus_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Kaktus</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/aglonema_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Aglonema</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.
						</p>
					</div>
				</a>
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/sansivera_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Sansivera</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
			</div>
			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/sukulen_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Sukulen</h5>
						<hr>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
							additional
							content. This content is a little bit longer.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
