<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>Kategori Artikel</h2>
    </div>
  </div>
  <div class="row">
  <?php foreach($kategori_list as $kl) {?>
    <div class="col-3 col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?=$kl->nama?></h5>
          <p class="card-text"><?=substr(strip_tags($kl->isi),0,60).'...'?></p>
          <a href="<?=base_url('home/detail/'.$kl->c_konten_id)?>" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
  <div class="row">
    <div class="col-12">
      <br>
      <h2>Artikel Terbaru</h2>
    </div>
  </div>
  <div class="row">
  <?php foreach($artikel_terbaru as $kl) {?>
    <div class="col-4 col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?=$kl->judul?></h5>
          <p class="card-text"><?=substr(strip_tags($kl->isi),0,60).'...'?></p>
          <a href="<?=base_url('home/detail/'.$kl->id)?>" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
