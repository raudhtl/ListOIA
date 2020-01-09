<script type="text/javascript">
<?php
 include(APPPATH."/modules/Dashboard/ajax/dashboard.js");
?>
</script>
<div class="col-12">
	<div class="row">
		<div class="col-8">
			<div class="card"  style="background-color: #172b4d; ">
				<div class="card-header" style="background-color: #172b4d; color:#c8d9de; font-size: 17px">
					Jumlah Peserta Internasionalisasi <?php echo $this->session->userdata("ses_nama_fakultas") ?> Per Tahun
				</div>
				<div class="card-body">
					<div class="chart">
						<canvas id="line-chart" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-4">
			<div class="card" >
				<div class="card-header" ">
					Program Internasionalisasi FMIPA Per Tahun
				</div>
				<div class="card-body">
					<div class="chart">
						<canvas id="bar-chart" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<style>
   background-color: rgba(47, 152, 208, 0.1);
</style>
