<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(isset($kategori_list)){ foreach($kategori_list as $kl){ ?>
            <li><a class="dropdown-item" href="<?=base_url('kategori/detail/'.$kl->id)?>"><?=$kl->nama?></a></li>
          <?php } } ?>
          </ul>
        </li>
        <?php if(isset($sess->user->id)){ ?>
        <li class="nav-item"><a href="<?=base_url('dashboard')?>" class="nav-link" >Dashboard</a></li>
        <li class="nav-item"><a href="<?=base_url('logout')?>" class="nav-link" >Logout</a></li>
        <?php } else { ?>
        <li class="nav-item"><a href="<?=base_url('login')?>" class="nav-link" >Login</a></li>
        <li class="nav-item"><a href="<?=base_url('register')?>" class="nav-link" >Register</a></li>
        <?php } ?>
      </ul>
      <form action="<?=base_url('search/result/')?>" method="get" class="d-flex">
        <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
