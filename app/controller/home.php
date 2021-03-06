<?php

class Home extends JI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $data = $this->__init();

      $data['sess'] = $this->getKey();
      $data['kategori_list'] = $this->bkm->getOneArticleByKategori();
      $data['artikel_terbaru'] = $this->ckm->getLatest();

      $this->setTitle('Welcome to my blog');
      $this->setDescription("Typography BS5 from Seme Framework.");
      $this->setKeyword('Seme Framework');
      $this->setAuthor('Seme Framework');

      $this->putThemeContent("home/home",$data); //pass data to view
      $this->loadLayout("col-1",$data);
      $this->render();
    }
    public function detail($id)
    {
      $data = $this->__init();
      $data['sess'] = $this->getKey();

      $data['ckm'] = $this->ckm->getById($id);
      if(!isset($data['ckm']->id)){
        redir(base_url());
        die();
      }
      if(!is_null($data['ckm']->c_konten_id)){
        redir(base_url());
        die();
      }

      $data['ckm']->kategori = $this->bkm->getById($data['ckm']->b_kategori_id);
      $data['ckm']->tahun = $this->bkm->getById($data['ckm']->b_kategori_id_tahun);
      $data['ckm']->penulis = $this->bum->getById($data['ckm']->b_user_id);
      $data['ckm']->komentar = $this->ckm->getKomentarById($id);
      $data['artikel_lain'] = $this->ckm->getLatest();

      $this->setTitle($data['ckm']->judul);
      $this->setDescription("Typography BS5 from Seme Framework.");
      $this->setKeyword('Seme Framework');
      $this->setAuthor('Seme Framework');

      $this->putThemeContent("home/detail",$data); //pass data to view
      $this->loadLayout("col-1",$data);
      $this->render();
    }
}
