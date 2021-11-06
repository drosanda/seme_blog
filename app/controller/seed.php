<?php
class Seed extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load('c_konten_model','ckm');
  }

  public function index(){

  }

  public function artikel(){
    $data = array();
    $data['sess'] = $this->getKey();
    if(!isset($data['sess']->user->id)){
      redir(base_url('login'));
      return;
    }
    for($i=1;$i<=1000;$i++){
      $di = array();
      $di['isi'] = 'Lorem '.$i.' limpsum dlor sit amet.<br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $di['judul'] = 'Seeder lorem '.$i.' article '.rand();
      $di['gambar'] = 'https://nyingspot.b-cdn.net/wp-content/uploads/2016/11/facebook-ads-tips-dan-trik-nyingspot.com_-800x400.jpg';
      $di['b_user_id'] = $data['sess']->user->id;
      $last_id = $this->ckm->set($di);
      echo $last_id.'<br>';
    }

  }
}
