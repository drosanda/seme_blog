<style>
  .judul-kategori {
    font-size: 4em;
    border-bottom: 3px #C45BAA dashed;
  }
</style>
<div class="container">
  <div class="row mt-2 mb-2">
    <div class="col-12">
      <h1 class="judul-kategori">Artikel</h1>
    </div>
  </div>
  <div class="row">
  <?php foreach($artikel_list as $kl) {?>
    <div class="col-3 col-md-4">
      <div class="card mb-2" style="height: 210px;">
        <div class="card-body">
          <h5 class="card-title" style="height: 48px;"><?=$kl->judul?></h5>
          <p class="card-text" style="height: 72px;"><?=substr(strip_tags($kl->isi),0,60).'...'?></p>
          <div class="d-grid gap-2">
            <a href="<?=base_url('home/detail/'.$kl->id)?>" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>

  <div class="row">
    <div class="col-md-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?=$page<=1 ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url('artikel/page/'.($page-1))?>">Previous</a></li>
          <?php
            $i=1;
            $pagemax = $pagetotal;
           ?>
          <?php
          if($pagetotal>10){
            $i=$page-5;
            if($i<=1) $i=1;
            $pagemax = $page+5;
          }
          ?>
          <?php for($i;$i<$pagemax;$i++){ ?>
          <li class="page-item <?= $page==$i ? 'active' : '' ?>"><a class="page-link" href="<?=base_url('artikel/page/'.$i)?>"><?=$i?></a></li>
          <?php } ?>
          <li class="page-item <?=$page>$pagetotal ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url('artikel/page/'.($page+1))?>">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>

</div>
