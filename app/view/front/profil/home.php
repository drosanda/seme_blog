<main class="register">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6">
        <div class="bungkus">
          <h1>Profil</h1>
          <?php if(isset($sess->flash) && strlen($sess->flash)>0){ ?>
          <div class="row">
            <!-- Message Notification -->
            <div class="alert alert-danger" role="alert">
              <p class="white-text"><b>Alert:</b> <?=$sess->flash?></p>
            </div>
          </div>
          <?php } ?>
          <form id="fprofil" action="<?=base_url()?>profil/proses" method="post">
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="inama">Full Name*</label>
                <input class="form-control" id="inama" type="text" name="nama" value="<?=$bum->nama?>" required />

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="iemail">Email *</label>
                <input class="form-control" id="iemail" type="email" name="email" value="<?=$bum->email?>" required />

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="iemail">Role *</label>
                <select class="form-select" id="irole" name="role"required>
                  <option value="owner" <?php if($bum->role == 'owner') echo 'selected'; ?>>Owner</option>
                  <option value="admin" <?php if($bum->role == 'admin') echo 'selected'; ?>>Administrator</option>
                  <option value="user" <?php if($bum->role == 'user') echo 'selected'; ?>>User</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="center-align">
                  <button class="btn btn-primary" type="submit" name="action">
                    Simpan Perubahan <i class="fa fa-save"></i>
                  </button>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</main>
