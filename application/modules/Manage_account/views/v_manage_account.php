<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-header border-0">
				<div class="row">
					<div class="col">
						<h3 class="mb-0">Kelola Akun</h3>
					</div>
					<div class="col-auto">
						<button class="btn-add" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</button>
					</div>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Fakultas</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i = 1;
					foreach ($account as $a) {
						?>
						<tr>
							<td class="mb-0 text-sm"><?php echo $i++ ?></td>
							<td class="mb-0 text-sm"><?php echo $a->nama_fakultas ?></td>
							<td class="mb-0 text-sm"><?php echo $a->email ?></td>
							<td class="mb-0 text-sm"> <a id="deleteaccount" href="#" class="delete_account" data-id="delete" data-val="Manage_account/delete_account" data-value="<?php echo $a->id; ?>">Hapus Akun </a></td>
						</tr>

					<?php  } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="add_account" method="post" action="<?php echo base_url('index.php/Manage_account/add_account'); ?>">
				<div class="modal-body">

						<div class="form-group">
							<label for="program">Pilih Fakultas :</label>
							<select id="program" name="id_fakultas" class="form-control" required>
								<option value="" disabled selected>Pilih fakultas</option>
								<?php
								foreach($faculty as $f){
									?>
									<option value="<?php echo $f->id?>">
										<?php echo $f->nama_fakultas?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="email">Masukkan email :</label>
							<input type="text" name="email" id="email" placeholder="Masukkan email"
								   class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password">Masukkan password :</label>
							<input type="password" required id="password" name="password" placeholder="Masukkan password"
								   class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password">Ketik ulang password :</label>
							<input type="password" required name="password_confirm" placeholder="Ketik ulang password"
								   class="form-control" required>
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>

				</div>
				</form>

			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	<?php
	include(APPPATH . "/modules/Manage_account/ajax/manage_account.js");

	?>
</script>
