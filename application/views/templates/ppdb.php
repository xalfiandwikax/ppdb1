
<style>
    .tabel-container{
        overflow-x: auto;
    }

    table{

        min-width: 100%;
    }

</style>


<div class="tabel-container">
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">No. KK</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kejar Paket</th>
      <th scope="col">Dokumen Akta</th>
      <th scope="col">Dokumen KK</th>
      <th scope="col">Dokumen Ijazah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
            
        <?php foreach ($biodata as $index =>$row): ?>
         

    <tr>
      <th scope="row"><?= $index + 1;?></th>
      <td><?= $row['nama_lengkap']; ?></td>
      <td><?= $row['nik']; ?></td>

      <td><?= $row['no_kk']; ?></td>
      <td><?= $row['jenis_kelamin']; ?></td>
      <td><?= $row['ttl']; ?></td>
      <td><?= $row['alamat']; ?></td>
      <td><?= $row['pendidikan']; ?></td>
      <td>
        <?php echo anchor ('Web/download/'. $row['gambar_akta'], '<img src ="'.base_url('file_upload/'. $row['gambar_akta']) .'" width="100" height="100" alt="Gambar Akta">'); ?>
      </td>
      <td>
        <?php echo anchor ('Web/download/'. $row['gambar_kk'], '<img src ="'.base_url('file_upload/'. $row['gambar_kk']) .'" width="100" height="100" alt="Gambar kk">'); ?>
      </td>
      <td>
        <?php echo anchor ('Web/download/'. $row['gambar_ijazah'], '<img src ="'.base_url('file_upload/'. $row['gambar_ijazah']) .'" width="100" height="100" alt="Gambar Ijazah">'); ?>
      </td>
     
      
      
    </tr>
        <?php endforeach ?>
    
  </tbody>
</table>
</div>

