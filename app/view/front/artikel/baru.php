<main class="register">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6">
        <div class="bungkus">
          <h1>Register</h1>
          <?php if(isset($sess->flash) && strlen($sess->flash)>0){ ?>
          <div class="row">
            <!-- Message Notification -->
            <div class="alert alert-danger" role="alert">
              <p class="white-text"><b>Alert:</b> <?=$sess->flash?></p>
            </div>
          </div>
          <?php } ?>
          <form id="fartikel_tambah" action="<?=base_url()?>artikel/proses" method="post">
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="ijudul">Judul*</label>
                <input class="form-control" id="ijudul" type="text" name="judul" placeholder="Judul Artikel" autocomplete="" required />
              </div>
            </div>
              <div class="row">
                <div class="col-12 col-sm-12 mb-2">
                  <label for="ijudul">URL Gambar*</label>
                  <input class="form-control" id="igambar" type="text" name="gambar" placeholder="URL Gambar" autocomplete="" required />
                </div>
              </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="iisi">Isi *</label>
                <textarea class="form-control" id="iisi" type="text" name="isi" placeholder="Artikel Lengkap" autocomplete="" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="center-align">
                  <button class="btn btn-primary" type="submit" name="action">
                    Simpan artikel <i class="fa fa-save"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
