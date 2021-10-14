<?php

class JI_Controller extends SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load('b_kategori_model','bkm');
        $this->load('b_user_model','bum');
        $this->load('c_konten_model','ckm');
    }
    protected function __init(){
      $data = array();
      $data['kategori_list'] = $this->bkm->getKategori();
      return $data;
    }

    public function index()
    {

    }
}
