<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?=$ckm->judul?></h1>
      <hr>
      <p class="lead">Penulis: <?=$ckm->penulis->nama?></p>
      <div class="std">
        <?=$ckm->isi?>
      </div>
    </div>
  </div>
  <hr>
  <?php if(count($ckm->komentar)>0){ ?>
    <?php foreach($ckm->komentar as $k){ ?>
      <div class="row">
        <div class="col-md-1 col-1">
          <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.18169-9/fr/cp0/e15/q65/11028010_397273563791894_6167962367170478228_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=ed5ff1&efg=eyJpIjoidCJ9&_nc_eui2=AeEWaRTUVckkKa2oSrsXI8ByrOApCT8QBgas4CkJPxAGBqtrpjLyrjP6fVfnihwsm4k&_nc_ohc=LRYnD3nBWYsAX-9t_t-&_nc_ht=scontent.fbdo9-1.fna&oh=1ab838b8181005ee47a52426d7497c2e&oe=618C3753" class="img-fluid">
        </div>
        <div class="col-md-11 col-11">
          <?=$k->komentar?>
          <br>
          <span class="pull-right"><?=$k->penulis_nama?></span>
        </div>

        <div class="col-md-12 col-12">
          <hr>
        </div>
      </div>
    <?php } ?>
  <?php }else{ ?>
    <p>Belum ada komentar</p>
  <?php } ?>
</div>
