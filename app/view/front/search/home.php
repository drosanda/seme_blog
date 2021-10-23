<div class="container">
  <div class="row mt-2 mb-2">
    <div class="col-12 animate__animated animate__backInDown">
      <h1 class="judul">Advanced Search</h1>
    </div>
  </div>
  <form method="post" action="<?=base_url('search/result/')?>">
    <div class="row">
      <div class="col-12 animate__animated animate__backInDown">
        <h2>Filter By Keyword</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 animate__animated animate__backInDown">
        <input name="keyword" type="text" value="" class="form-control" />
      </div>
    </div>
    <div class="row">
      <div class="col-12 animate__animated animate__backInDown">
        <h2>Filter By Kategori Artikel</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 animate__animated animate__backInDown">
        <?php foreach($kategori_list as $k) {?>
          <div class="form-check">
            <input id="cb_<?=$k->id?>" type="checkbox" name="kategori_id[<?=$k->id?>]" class="form-check-input" />
            <label class="form-check-label" for="cb_<?=$k->id?>">
               <?=$k->nama?>
            </label>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 animate__animated animate__backInDown">
        <button type="submit" class="btn btn-primary"> Filter <i class="fa fa-search"></i></button>
      </div>
    </div>
  </form>
</div>
