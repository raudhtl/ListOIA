<script type="text/javascript">
<?php
 include(APPPATH."/modules/Dashboard/ajax/dashboard.js");
?>
</script>
<div class="col-12">
	<div class="row">
		<div class="col-sm-8">
			<div class="card" style="background-color: #40739e;">
				<div class="card-header" style="background-color: #40739e; color:#c8d9de; font-size: 17px; padding: 0.85rem 1.5rem;">
                    Jumlah Peserta Student Exchange <?php echo $this->session->userdata("ses_nama_fakultas") ?> Per Tahun
				</div>
				<div class="card-body">
					<div class="chart">
						<canvas id="line-chart-se" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
            <div class="card"  style="border-left:5px solid #d9534f; margin-bottom: 2rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
                <div class="card-header" style="padding: 0.75rem 1.5rem;">
                    TOTAL
                </div>
                <div class="card-body">
                    <h2><?php echo $total;?></h2>
                </div>
            </div>
			<div class="card" style="border-left:5px solid #5cb85c; margin-bottom: 2rem;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="card-header" style="padding: 0.75rem 1.5rem;">
                    SHORT TERM
				</div>
				<div class="card-body">
                    <h2><?php echo $short_term;?></h2>
				</div>
			</div>
            <div class="card" style="border-left:5px solid #FFB61E; margin-bottom: 2rem;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header" style="padding: 0.75rem 1.5rem;">
                    STUDENT EXCHANGE
                </div>
                <div class="card-body">
                    <h2><?php echo $student_exchange;?></h2>
                </div>
            </div>
		</div>
	</div>
    
    <div class="row">
        <div class="col-sm-8">
            <div class="card"  style="background-color: #AC3E31;">
                <div class="card-header" style="background-color: #AC3E31; color:#c8d9de; font-size: 17px;">
                    Jumlah Peserta Short Term Program <?php echo $this->session->userdata("ses_nama_fakultas") ?> Per Tahun
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
                <div class="card-header">
                    Program Internasionalisasi <?php echo $this->session->userdata("ses_username_fakultas") ?> Per Tahun
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

