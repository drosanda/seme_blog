<div class="container">
  <div class="row mt-2 mb-2">
    <div class="col-12">
      <h2>Kategori Artikel</h2>
    </div>
  </div>
  <div class="row">
  <?php foreach($kategori_list as $kl) {?>
    <div class="col-3 col-md-4">
      <div class="card mb-2" style="height: 210px;">
        <div class="card-body">
          <h5 class="card-title" style="height: 48px;"><?=$kl->nama?></h5>
          <p class="card-text" style="height: 72px;"><?=substr(strip_tags($kl->isi),0,60).'...'?></p>
          <div class="d-grid gap-2">
            <a href="<?=base_url('home/detail/'.$kl->c_konten_id)?>" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
  <div class="row mt-2 mb-2">
    <div class="col-12">
      <br>
      <h2>Artikel Terbaru</h2>
    </div>
  </div>
  <div class="row">
  <?php foreach($artikel_terbaru as $kl) {?>
    <div class="col-4 col-md-4">
      <div class="card mb-2" style="height: 210px;">
        <div class="card-body">
          <h5 class="card-title" style="height: 48px;"><?=$kl->judul?></h5>
          <p class="card-text" style="height: 72px;"><?=substr(strip_tags($kl->isi),0,100).'...'?></p>
          <div class="d-grid gap-2">
            <a href="<?=base_url('home/detail/'.$kl->id)?>" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
