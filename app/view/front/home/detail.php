<style>
.img-circle {
  border-radius: 50%;
}
.artikel-judul {
  font-size: 4em;
}
.std {
  min-height: 70vh;
}
</style>
<div class="container">
  <div class="row mt-4">
    <div class="col-12 mb-1" style="border-bottom: 1px #cccccc dashed">
      <h1 class="artikel-judul"><?=$ckm->judul?></h1>
    </div>


  </div>

  <?php if(isset($sess->user->id)){ ?>
  <div class="row mb-3">
    <div class="col-12">
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="<?=base_url()?>artikel/edit/<?=$ckm->id?>" class="btn btn-warning">Edit</a>
        <a href="<?=base_url()?>artikel/hapus/<?=$ckm->id?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
  <?php } ?>


  <div class="row">
    <div class="col-9">
      <img src="<?=$ckm->gambar?>" class="img-fluid" />
      <div class="std">
        <?=$ckm->isi?>
      </div>

      <br>
      <h2>Komentar</h2>
      <hr>
      <?php if(count($ckm->komentar)>0){ ?>
        <?php foreach($ckm->komentar as $k){ ?>
          <div class="row">
            <div class="col-md-1 col-1">
              <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.18169-9/fr/cp0/e15/q65/11028010_397273563791894_6167962367170478228_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=ed5ff1&efg=eyJpIjoidCJ9&_nc_eui2=AeEWaRTUVckkKa2oSrsXI8ByrOApCT8QBgas4CkJPxAGBqtrpjLyrjP6fVfnihwsm4k&_nc_ohc=LRYnD3nBWYsAX-9t_t-&_nc_ht=scontent.fbdo9-1.fna&oh=1ab838b8181005ee47a52426d7497c2e&oe=618C3753" class="img-fluid">
            </div>
            <div class="col-md-11 col-11">
              <div class="px-2">
                <?=$k->komentar?>
                <br>
                <span class="pull-right" style="font-size: smaller;"><em><?=$k->penulis_nama?></em></span>
              </div>
            </div>

            <div class="col-md-12 col-12">
              <hr>
            </div>
          </div>
        <?php } ?>
      <?php }else{ ?>
        <p>Belum ada komentar</p>
      <?php } ?>

      <?php if(isset($sess->user->id)){ ?>
      <form action="<?=base_url('komentar/proses')?>" method="post">
        <input type="hidden" name="c_konten_id" value="<?=$ckm->id?>">
        <label for="iisi">Komentar</label>
        <textarea id="iisi" name="isi" class="form-control" required></textarea>
        <br>
        <button class="btn btn-primary">Tambahkan komentar</button>
      </form>
      <?php }else{ ?>

      <?php } ?>

    </div>
    <div class="col-3 pl-2" style="border-left: 1px #cccccc dashed">
      <div class="text-center">
        <span class="mb-4"><strong>Tentang Penulis</strong></span>
        <div class="p-4">
          <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.18169-9/fr/cp0/e15/q65/11028010_397273563791894_6167962367170478228_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=ed5ff1&efg=eyJpIjoidCJ9&_nc_eui2=AeEWaRTUVckkKa2oSrsXI8ByrOApCT8QBgas4CkJPxAGBqtrpjLyrjP6fVfnihwsm4k&_nc_ohc=LRYnD3nBWYsAX-9t_t-&_nc_ht=scontent.fbdo9-1.fna&oh=1ab838b8181005ee47a52426d7497c2e&oe=618C3753" class="img-fluid img-circle" />
        </div>
        <br>
        <p class="lead mt-1 mb-1"><?=$ckm->penulis->nama?></p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="row">
        <div class="col-12">
          <?php foreach($artikel_lain as $kl){ ?>
          <div class="card mb-2" style="height: 210px;">
            <div class="card-body">
              <h5 class="card-title" style="height: 48px;"><?=substr(strip_tags($kl->judul),0,40).'...'?></h5>
              <p class="card-text" style="height: 72px;"><?=substr(strip_tags($kl->isi),0,60).'...'?></p>
              <div class="d-grid gap-2">
                <a href="<?=base_url('home/detail/'.$kl->id)?>" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>
  <hr>

</div>
