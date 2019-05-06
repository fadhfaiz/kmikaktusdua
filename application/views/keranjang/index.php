<section class="container">
	<table class="table table-bordered table-hover mt-5">
		<thead class="text-center thead-light">
			<tr>
				<th scope="col">Foto Barang Barang</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Harga Satuan</th>
				<th scope="col">Jumlah Pembelian</th>
                <th scope="col">Harga Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Kaktus.jpg</th>
				<td>Kaktus Durian Sumatera</td>
				<td class="text-center">Rp 35.000</td>
				<td class="text-center">3</td>
                <td class="text-center">Rp 105.000</td>
			</tr>
			<tr>
				<th scope="row">Aglonema.png</th>
				<td>Aglonema Bantul</td>
				<td class="text-center">Rp 55.000</td>
				<td class="text-center">2</td>
                <td class="text-center">Rp 110.000</td>
			</tr>
			<tr>
				<td scope="row" colspan="4" class="text-center font-weight-bold">Jumlah Total Pembayaran</td>
                <td class="text-center font-weight-bold bg-secondary" style="color: white;">Rp 215.000</td>
			</tr>
		</tbody>
	</table>

    <div class="row mt-3">
        <div class="col-6"></div>
        <div class="col-3"><a href="<?= base_url(); ?>marketplace/index"><input type="button" value="Kembali" class="btn btn-outline-info btn-block"></a></div>
        <div class="col-3"><a href="<?= base_url(); ?>pembelian/index"><input type="button" value="Checkout" class="btn btn-success btn-block"></a></div>
    </div>
</section>
