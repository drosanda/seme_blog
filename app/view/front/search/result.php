<div class="container">

  <div class="row mt-2 mb-2">
    <div class="col-12">
      <br>
      <h2>Hasil Pencarian "<?=($keyword)?>"</h2>
    </div>
  </div>

  <div class="row">
  <?php if(count($ckm)){ foreach($ckm as $a) {?>
    <div class="col-4 col-md-4">
      <div class="card mb-2" style="height: 210px;">
        <div class="card-body">
          <h5 class="card-title" style="height: 48px;"><?=$a->judul?></h5>
          <p class="card-text" style="height: 72px;"><?=substr(strip_tags($a->isi),0,100).'...'?></p>
          <div class="d-grid gap-2">
            <a href="<?=base_url('home/detail/'.$a->id)?>" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  <?php } }else{ ?>
    <div class="col-12">
      <div class="alert alert-success" role="alert">
        Hasil pencarian nihili, tidak ada hasil yang ditemukan
      </div>
    </div>
  <?php } ?>
  </div>

</div>
