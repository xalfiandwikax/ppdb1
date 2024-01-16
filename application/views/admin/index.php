<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
<div class="card mb-3" style="max-width: 540px;">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $User['nama'];?></h5>
        <p class="card-text"><?= $User['email'];?></p>
        <p class="card-text"><small class="text-muted">Daftar Pada tanggal <?= date('d F Y',$User['tanggal_dibuat']);?></small></p>
      </div>
    </div>
  </div>
</div>

</div>