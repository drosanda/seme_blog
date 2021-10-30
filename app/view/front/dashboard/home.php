<div class="container">
  <div class="row">
    <div class="col s12">
      <h1><small>Selamat Datang kembali,</small> <?=$sess->user->nama?></h1>

      <?php if($sess->user->role == 'admin' || $sess->user->role == 'owner') { ?>
      <a href="<?=base_url('artikel/baru')?>" class="btn btn-success">
        <i class="fa fa-plus"></i> Artikel
      </a>
      <?php } ?>
      <a href="<?=base_url('profil')?>" class="btn btn-info"><i class="fa fa-user"></i> Profil</a>

    </div>
  </div>
</div>
