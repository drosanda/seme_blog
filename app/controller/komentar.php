<?php
class Komentar extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load('b_user_model','bum');
  }
  public function index()
  {
    echo 'masuk ke index';
    // redir(base_url(''));
  }
  public function proses(){
    $data = array();
    $data['sess'] = $this->getKey();

    $isi = $this->input->post('isi');
    $c_konten_id = (int) $this->input->post('c_konten_id');

    if($c_konten_id <= 0){
      echo 'Invalid c_konten_id';
      return;
    }

    if(strlen($isi)<=1){
      echo 'Invalid isi';
      return;
    }

    $di = array();
    $di['c_konten_id'] = $c_konten_id;
    $di['isi'] = $isi;
    $di['b_user_id'] = $data['sess']->user->id;

    $res = $this->ckm->set($di);
    if($res){

      redir(base_url('home/detail/'.$c_konten_id),1);
      return;
    }else{
      echo 'Gagal mengirim komentar';
      return;
    }
  }
}
