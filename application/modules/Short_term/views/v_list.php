<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
  <div class="login" style="margin:50px; margin-left:100px; margin-right:100px">
    <div class="panel panel-default">
      <div class="panel-heading">Daftar Mahasiswa</div>

      <div class="panel-body">
        <a href="<?php echo base_url("index.php/Short_term/download"); ?>">Download daftar Mahasiswa</a><>
        <a href="<?php echo base_url("index.php/Short_term/download_doc"); ?>">Download dokumen</a>
        <table class="table" id="#myTable" style="max-height: 600px; overflow: auto; display: inline-block" >
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No passport</th>
            <th scope="col">Juruan Asal</th>
            <th scope="col">Fakultas asal</th>
            <th scope="col">Universitas Asal</th>
            <th scope="col">Negara tujuan</th>
            <th scope="col">Universitas tujuan</th>
            <th scope="col">Negara asal</th>
            <th scope="col">Nama program</th>
            <th scope="col">Jenis program</th>
            <th scope="col">tahun</th>
            <th scope="col">Tujuan Kunjungan</th>
            <th scope="col">Tanggal mulai program</th>
            <th scope="col">Tanggal akhir program</th>
            <th scope="col">Dokumen</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($mhs as $m){
              ?>
              <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $m->nama ?></td>
              <td><?php echo $m->email ?></td>
              <td><?php echo $m->no_passport ?></td>
              <td><?php echo $m->jurusan_asal ?></td>
              <td><?php echo $m->fakultas_asal ?></td>
              <td><?php echo $m->univ_asal ?></td>
              <td><?php echo $m->negara_tujuan ?></td>
              <td><?php echo $m->univ_tujuan ?></td>
              <td><?php echo $m->negara_asal ?></td>
              <td><?php echo $m->nama_program ?></td>
              <td><?php echo $m->jenis_program ?></td>
              <td><?php echo $m->tahun ?></td>
              <td><?php echo $m->tujuan ?></td>
              <td><?php echo $m->tgl_mulai ?></td>
              <td><?php echo $m->tgl_akhir ?></td>
              <td><a href="#" onclick="download("1dc21581101ab1f2b06a936b02bc3b81.zip", "tes")"><?php echo $m->dokumen ?></a></td>
              </tr>

            <?php  } ?>

        </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
