	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header border-0">
					<div class="row">
						<div class="col">
							<h3 class="mb-0">Daftar Mahasiswa</h3>
						</div>
						<div class="col-auto">
							<a href="<?php echo base_url("index.php/Short_term/download"); ?>"> Download daftar Mahasiswa</a>
						</div>
						<div class="col-auto">
							<a href="<?php echo base_url("index.php/Short_term/download_doc"); ?>"> Download dokumen</a>
						</div>
					</div>
				</div>

				<div style="display:block; height:810px; width:730; overflow:auto;">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Email</th>
								<th scope="col">No passport</th>
								<th scope="col">Negara asal</th>
								<th scope="col">Jurusan Asal</th>
								<th scope="col">Fakultas asal</th>
								<th scope="col">Universitas Asal</th>
								<th scope="col">Negara tujuan</th>
								<th scope="col">Jurusan tujuan</th>
								<th scope="col">Fakultas Tujuan</th>
								<th scope="col">Universitas tujuan
								<th scope="col">Jenis Program</th>
								<th scope="col">Tahun</th>
                                <th scope="col">Semeser</th>
								<th scope="col">Tanggal mulai program</th>
								<th scope="col">Tanggal akhir program</th>
								<th scope="col">Dokumen</th>
                                <th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
				$i = 1;
				foreach($mhs as $m){
					?>
							<tr>
								<td class="mb-0 text-sm"><?php echo $i++ ?></td>
								<td class="mb-0 text-sm"><?php echo $m->nama ?></td>
								<td class="mb-0 text-sm"><?php echo $m->email ?></td>
								<td class="mb-0 text-sm"><?php echo $m->no_passport ?></td>
								<td class="mb-0 text-sm"><?php echo $m->negara_asal ?></td>
								<td class="mb-0 text-sm"><?php echo $m->jurusan_asal ?></td>
								<td class="mb-0 text-sm"><?php echo $m->fakultas_asal ?></td>
								<td class="mb-0 text-sm"><?php echo $m->univ_asal ?></td>
								<td class="mb-0 text-sm"><?php echo $m->negara_tujuan ?></td>
								<td class="mb-0 text-sm"><?php echo $m->jurusan_tujuan ?></td>
								<td class="mb-0 text-sm"><?php echo $m->fakultas_tujuan ?></td>
								<td class="mb-0 text-sm"><?php echo $m->univ_tujuan ?></td>
								<td class="mb-0 text-sm"><?php echo $m->jenis_program ?></td>
								<td class="mb-0 text-sm"><?php echo $m->tahun ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->semester ?></td>
								<td class="mb-0 text-sm"><?php echo $m->tgl_mulai ?></td>
								<td class="mb-0 text-sm"><?php echo $m->tgl_akhir ?></td>
								<td class="mb-0 text-sm"><a href="<?php echo base_url("uploads/$m->dokumen"); ?>"><?php echo $m->dokumen ?></a></td>
                                <td class="mb-0 text-sm"><a href="#" id="mhsedit" class="mhs-edit" data-val="Student_exchange/edit_mahasiswa" data-value="<?php echo $m->id_mhs ?>">Edit</a>
                                   | <a href="#" class="mhs-delete" data-val="Student_exchange/delete_mahasiswa" data-value="<?php echo $m->id_mhs ?>" data-program="<?php echo $m->id_program ?>" data-doc="<?php echo $m->document ?>">Delete</a></td>
							</tr>

							<?php  } ?>

						</tbody>
					</table>
				</div>
				<!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
			</div>
		</div>
	</div>

	<script type="text/javascript">
	<?php
	 include(APPPATH."/modules/Student_exchange/ajax/Student_exchange.js");

	?>
	</script>
