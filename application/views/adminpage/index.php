<section>

	<div class="container my-5">

		<!-- Statistik -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/chartjs/Chart.js"></script>
		<div id="chart">
</div>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik pengunjung',
   x: -20
  },
  subtitle: {
   text: 'Count visitor',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total pengunjung'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>
		<!-- Statistik -->
		<!-- <div class="row">
        <div class="col-4"></div>    
        <div class="col-4"></div>    
        <div class="col-4"></div>    
    </div> -->

		<div class="container my-5">
			<div class="card-deck">

				<div class="card bg-dark"><a href="<?php echo base_url(); ?>adminpage/Produk/product_admin"
						style="color:white; text-decoration: none;">
						<div class="card-body">
							<h5 class="card-title text-center">Admin Produk</h5>
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

				<div class="card bg-dark"><a href="<?php echo base_url(); ?>adminpage/artikel/article_admin"
						style="color:white; text-decoration: none;">
						<div class="card-body">
							<h5 class="card-title text-center">Admin Artikel</h5>
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

				<div class="card bg-dark"><a href="<?php echo base_url(); ?>adminpage/verifikasi/verification_admin"
						style="color:white; text-decoration: none;">
						<div class="card-body">
							<h5 class="card-title text-center">Admin Verifikasi</h5>
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

			</div>
		</div>
</section>
