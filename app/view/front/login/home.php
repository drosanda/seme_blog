<main class="login">
  <div class="container">
    <div class="row">
      <div class="col-12 col-offset-md-3 col-md-6 col-offset-sm-2 col-sm-8">
        <div class="bungkus">
          <h1>Login</h1>
          <form id="flogin" action="<?=base_url()?>login/proses" method="post" class="form-horizontal">

          <?php if(isset($sess->flash) && strlen($sess->flash)>0){ ?>
          <div class="row">
            <!-- Message Notification -->
            <div class="alert alert-danger" role="alert">
              <p class="white-text"><b>Alert:</b> <?=$sess->flash?></p>
            </div>
          </div>
          <?php } ?>

            <div class="row">
              <div class="input-field col-12">
                <label for="iemail">Email *</label>
                <input id="iemail" type="email" name="email" placeholder="Email" autocomplete="" required class="form-control" />
              </div>
            </div>
            <div class="row">
              <div class="input-field col-12">
                <label for="ipassword">Password *</label>
                <input id="ipassword" type="password" name="password" placeholder="Password" autocomplete="" class="form-control" required />

              </div>

              <div class="col-12">
                <div class="mb-3 text-end">
                  <a href="<?=base_url()?>lupa" class="lupa">Lupa Password</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="text-center">
                  <button class="btn btn-primary" type="submit" name="action">
                    Login <i class="fa fa-save"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="d-grid gap-2 text-center">
                  atau
                  <a href="<?=base_url()?>register" class="daftar">Daftar</a>
                </div>
              </div>
            </div>

          </div>

        </form>
      </div>

    </div>
  </div>
</main>
