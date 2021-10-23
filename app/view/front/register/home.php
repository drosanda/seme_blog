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
          <form id="flogin" action="<?=base_url()?>register/proses" method="post">
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="inama">Full Name*</label>
                <input class="form-control" id="inama" type="text" name="nama" placeholder="Full Name" autocomplete="" required />

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="iemail">Email *</label>
                <input class="form-control" id="iemail" type="email" name="email" placeholder="Email" autocomplete="" required />

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="ipassword">Password *</label>
                <input class="form-control" id="ipassword" type="password" name="password" placeholder="Password" autocomplete="" required />

              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 mb-2">
                <label for="ipassword_konfirmasi">Password Confirmation *</label>
                <input class="form-control" id="ipassword_konfirmasi" type="password" name="password_konfirmasi" placeholder="Password Confirmation" autocomplete="" required />

              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="center-align">
                  <button class="btn btn-primary" type="submit" name="action">
                    Daftar <i class="fa fa-save"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12">
                <div class="d-grid gap-2 center-align">
                  <a href="<?=base_url()?>login" class="daftar">Login</a>
                </div>
              </div>
              <div class="col s12">
                <div class="d-grid gap-2 center-align">
                  atau
                </div>
              </div>
              <div class="col s12">
                <div class="d-grid gap-2 center-align">
                  <a href="<?=base_url()?>lupa" class="daftar">Lupa Password?</a>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</main>
