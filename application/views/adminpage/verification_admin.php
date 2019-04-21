<section>
    <div class="container mt-5">
    <table class="table  table-bordered">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Kode Pesanan</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Pemesan</th>
        <th scope="col">Tanggal pesan</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
       <tr>
        <th scope="row">123456</th>
        <td>kaktus Sehat</td>
        <td>Rocky Gersang</td>
        <td>DD-MM-YYYY</td>
        <td><a href="<?php echo base_url(); ?>adminpage/detail_verification" >Menunggu ongkir </a></td>
        </tr>
        <tr>
        <th scope="row">123456</th>
        <td>Kaktus Nyai</td>
        <td>Ratna Sarungterompet</td>
        <td>DD-MM-YYYY</td>
        <td>Terkonfirmasi	<a href="<?php echo base_url(); ?>adminpage/detail_verification" class="btn btn-outline-secondary" disabled><i
							class="fas fa-edit"></i></a></td>
        </tr>
        <tr>
        <th scope="row">123456</th>
        <td>Kaktus Setan</td>
        <td>Gres Natali</td>
        <td>DD-MM-YYYY</td>
        <td>Terkonfirmasi</td>
        </tr>
    </tbody>
    </table>

    </div>
</section>