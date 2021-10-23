<?php
class Artikel extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load('b_user_model','bum');
  }
  public function index(){

  }

  public function baru()
  {
    $data = array();
    $data['sess'] = $this->getKey();
    if(!isset($data['sess']->user->id)){
      redir(base_url('login'));
      return;
    }
    $data = array();
    $data['sess'] = $this->__flash();
    $this->setTitle('Artikel');
    $this->setDescription("Please register before you can login.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $this->putThemeContent("artikel/baru",$data); //pass data to view
    $this->loadLayout("col-1",$data);
    $this->__flashClear();
    $this->render();
  }

  public function proses(){
    $data['sess'] = $this->getKey();

    $isi = $this->input->post('isi');
    $judul = $this->input->post('judul');
    $gambar = $this->input->post('gambar');

    if(strlen($isi)<=1){
      echo 'Invalid isi';
      return;
    }

    if(strlen($judul)<=4){
      echo 'Invalid judul';
      return;
    }

    $di = array();
    $di['isi'] = $isi;
    $di['judul'] = $judul;
    $di['gambar'] = $gambar;
    $di['b_user_id'] = $data['sess']->user->id;

    $last_id = $this->ckm->set($di);
    if($last_id){
      redir(base_url('home/detail/'.$last_id),1);
      return;
    }else{
      echo 'Password confirmation doesn\'t match';
      return;
    }
  }
}
