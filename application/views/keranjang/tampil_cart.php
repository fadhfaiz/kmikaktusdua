<section class="container">

	<table class="table table-bordered table-hover mt-5">
		<thead class="text-center thead-light">
			<tr>
				<th scope="col">Kode Barang</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Harga Satuan</th>
				<th scope="col">Jumlah Pembelian</th>
                <th scope="col">Harga Total</th>
			</tr>
		</thead>
	

		</tbody>
	</table>

    <div class="row mt-3">
        <div class="col-6"></div>
        <div class="col-3"><a href="<?= base_url(); ?>Marketplace"><input type="button" value="Kembali" class="btn btn-outline-info btn-block"></a></div>
        <div class="col-3"><a href="<?= base_url(); ?>Pembelian"><input type="button" value="Checkout" class="btn btn-warning btn-block"></a></div>
    </div>

</section>
