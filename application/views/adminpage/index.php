<section>

	<div class="container my-5">

		<!-- Statistik -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/chartjs/Chart.js"></script>
		<div class="row">
			<div class="col-sm-9"><canvas id="myChart"></canvas></div>
			<div class="col-sm mt-5 mb-5">
				<div class="row-2">
					<h4>This Years</h4>
				</div>
				<div class="row-2">
					<h4>75234 Visitors</h4>
				</div>
				<br>
				<div class="row-2">
					<h4>This Month</h4>
				</div>
				<div class="row-2">
					<h4>75234 Visitors</h4>
				</div>
				<br>
				<div class="row-2">
					<h4>Today</h4>
				</div>
				<div class="row-2">
					<h4>75234 Visitors</h4>
				</div>
				
			</div>
		</div>
		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu","Minggu"],
					datasets: [{
						label: 'Statistik Harian Pengunjung',
						data: [12, 19, 3, 23, 2, 3, 11,5],
						backgroundColor: [
							'rgba(0, 128, 128, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
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
