<section class="container">

	<table class="table table-bordered table-hover mt-5">
		<thead class="text-center thead-light">
		<tr id= "main_heading">
		<td width="2%">No</td>
		<td width="33%">Nama Produk</td>
		<td width="17%">Harga</td>
		<td width="20%">Jumlah</td>
		<td width="20%">Total</td>
		<td width="10%">Hapus</td>
		</tr>
		</thead>
	<tbody>
      <?php
      $i = 1;
      $total = 0;
      foreach($data as $a) :
        $total += $a['total'];
      ?>
        <tr>
        <td><?= $i++; ?></td>
        <td><?= $a['nama'] ?></td>
        <td>Rp. <?= $a['harga'] ?></td>
        <td class="text-center"><?= $a['jumlah'] ?></td>
        <td>Rp. <?= $a['total'] ?></td>
        <td><a href="<?= base_url('Keranjang/hapus/').$a['kode']?>" class="btn btn-danger"><i class='fas fa-fw fa-trash'></i></a></td>
        </tr>
      <?php endforeach; ?>
		</tbody>
      <tfoot>
      <tr>
      <td colspan="4" class="text-center">Total</td>
      <td>Rp. <?= $total; ?></td>
      <td></td>
      </tr>
      <tr>
      <td colspan ="5"></td>
      <td><a href="<?= base_url('Pembelian')?>" class="btn btn-warning">Checkout</a></td>
      </tr>
      </tfoot>
</table>
</section>
