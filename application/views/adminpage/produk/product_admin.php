<section class="container mt-4">
	<form action="">
		<div class="row">
			<div class="col-6"><input class="form-control" type="text" placeholder="Cari tanaman"></div>
			<div class="col-3"><button class="btn btn-block btn-outline-secondary">Search</button></div>
			<div class="col-3"><a href="<?php echo base_url()?>adminpage/produk/product_baru" class="btn btn-block btn-warning">Upload Produk Baru</a></div>
		</div>
	</form>
</section>

<section class="container text-center">
	<div class="card-deck my-4">
	<div class="card-columns">
		<?php
			foreach($tanaman as $t){
				echo '
					<div class="card">
						<img src="'.base_url().'assets/img/'.$t->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$t->nama_tanaman.'</h6>
								<h6 class="text-muted">Kode : '.$t->kode_tanaman.'</h6>
							</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-3"><a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
								</div>
								<div class="col-3"><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
								</div>
								<div class="col-6"><input class="form-control" type="text" id="disabledInput" disabled value="'.$t->stok.'"></div>
							</div>
						</div>
					</div>
				';
			}
		
			foreach($aksesoris as $a){
				echo '
					<div class="card">
						<img src="'.base_url().'assets/img/'.$a->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$a->nama.'</h6>
								<h6 class="text-muted">Kode : '.$a->kode_aksesoris.'</h6>
							</div>
						<div class="card-footer">
						<div class="row">
								<div class="col-3"><a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
								</div>
								<div class="col-3"><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
								</div>
								<div class="col-6"><input class="form-control" type="text" id="disabledInput" disabled value="'.$t->stok.'"></div>
							</div>
						</div>
					</div>
				';
			}
			foreach($paket as $p){
				echo '
					<div class="card">
						<img src="'.base_url().'assets/img/'.$p->gambar.'"
								class="card-img-top" alt="...">
							<div class="card-body">
								<h6 class="card-title">'.$p->nama_paket.'</h6>
								<h6 class="text-muted">Kode : '.$p->kode_paket.'</h6>
							</div>
						<div class="card-footer">
						<div class="row">
								<div class="col-3"><a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
								</div>
								<div class="col-3"><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
								</div>
								<div class="col-6"><input class="form-control" type="text" id="disabledInput" disabled value="'.$t->stok.'"></div>
							</div>
						</div>
					</div>
				';
			}
		?>
		</div>
	</div>
</section>
