<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0">Daftar Program</h3>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama program</th>
                            <th scope="col">Jenis program</th>
                            <th scope="col">tahun</th>
                            <th scope="col">Tujuan Kunjungan</th>
                            <th scope="col">Tanggal mulai program</th>
                            <th scope="col">Tanggal akhir program</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($program as $m) {
                        ?>
                            <tr>
                                <td class="mb-0 text-sm"><?php echo $i++ ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->nama_program ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->jenis_program ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->tahun ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->tujuan ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->tgl_mulai ?></td>
                                <td class="mb-0 text-sm"><?php echo $m->tgl_akhir ?></td>
                                <td class="mb-0 text-sm"> <a href="#" id="menuedit" class="menu-edit" data-id="edit" data-val="Short_term/edit_program" data-value="<?php echo $m->nama_program; ?>">Edit Program</a></td>
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
    <div id="container-content-2">
        <?php echo $content ?>
    </div>

</div>

<script type="text/javascript">
    <?php
    include(APPPATH . "/modules/Short_term/ajax/short_term.js");

    ?>
</script>