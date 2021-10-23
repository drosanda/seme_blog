<?php
class Search extends JI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $data = $this->__init();

      $data['kategori_list'] = $this->bkm->getOneArticleByKategori();
      $data['artikel_terbaru'] = $this->ckm->getLatest();

      $this->setTitle('Advanced Search');
      $this->setDescription("Typography BS5 from Seme Framework.");
      $this->setKeyword('Seme Framework');
      $this->setAuthor('Seme Framework');

      $this->putThemeContent("search/home",$data); //pass data to view
      $this->loadLayout("col-1",$data);
      $this->render();
    }
    public function result()
    {
      $data = $this->__init();

      $keyword = strip_tags($this->input->request('keyword'));

      $data['keyword'] = $keyword;
      $data['ckm'] = $this->ckm->getSearch($keyword);

      $this->setTitle('Search Result for '.($keyword));
      $this->setDescription("Typography BS5 from Seme Framework.");
      $this->setKeyword('Seme Framework');
      $this->setAuthor('Seme Framework');

      $this->putThemeContent("search/result",$data); //pass data to view
      $this->loadLayout("col-1",$data);
      $this->render();
    }
}
