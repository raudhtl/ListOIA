<div class="col-12 align-items-center">
    <div class="row">

        <div class="col-10">


            <div class="card-body">
                <form id="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Short_term/update'); ?>">

                    <div class="form-group">
                        <label for="program">Program :</label>
                        <select id="program" name="program" class="form-control" onchange="CheckProgram(this.value);" required>
                            <option value="" disabled selected>Pilih program</option>
                            <?php
                            foreach ($program as $p) {
                            ?>
                                <option value="<?php echo $p->nama_program ?>">
                                    <?php echo $p->nama_program ?>
                                </option>
                            <?php } ?>
                            <option value="others">Program lain</option>
                        </select>
                        <input type="text" name="p" placeholder="Masukkan nama program :" class="form-control" id="edit_program" style="display:none">
                    </div>
                    <div class="form-group">
                        <label for="jenis_program"> Jenis program : </label>
                        <select id="jenis_program" name="jenis_program" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis program</option>
                            <option value="outbound">Outbound</option>
                            <option value="inbound">Inbound</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun :</label>
                        <input type="year" name="tahun" placeholder="Masukkan tahun program :" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan kunjungan :</label>
                        <select id="tujuan" name="tujuan_kunjungan" class="form-control" required>
                            <option value="" disabled selected>Pilih tujuan</option>
                            <option value="Conference">Conference</option>
                            <option value="Seminar">Seminar</option>
                            <option value="Workshop">Workshop</option>
                            <option value="Magang">Magang</option>
                            <option value="Visit">Visit</option>
                            <option value="Summercamp">Summercamp</option>
                            <option value="Short-course">Short-course</option>
                            <option value="Darmasiswa">Darmasiswa</option>
                        </select>
                    </div>
                    <div class="form-group" id="tgl_mulai">
                        <label for="tgl_mulai">Tanggal mulai program :</label>
                        <input type="date" name="tgl_mulai" class="form-control" required>
                    </div>
                    <div class="form-group" id="tgl_akhir">
                        <label for="tgl_akhir">Tanggal akhir program:</label>
                        <input type="date" name="tgl_akhir" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>