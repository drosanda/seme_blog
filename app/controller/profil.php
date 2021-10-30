<?php
class Profil extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  }
  public function index()
  {
    $data = array();
    $data['sess'] = $this->getKey();
    if(!isset($data['sess']->user->id)){
      redir(base_url('login'));
      return;
    }
    $data['bum'] = $this->bum->getById($data['sess']->user->id);
    $this->setTitle('Profil '.$data['sess']->user->nama);
    $this->setDescription("Congratulation, you have done well.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $this->putThemeContent("profil/home",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }

  public function proses(){
    $sess = $this->getKey();
    if(!isset($sess->user->id)){
      redir(base_url('dashboard/?profil=error3'));
      return;
    }

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $role = $this->input->post('role');

    if(strlen($nama)<=1){
      $this->__flash('Invalid name');
      $this->index();
      return;
    }

    if(strlen($email)<=4){
      $this->__flash('Invalid email');
      $this->index();
      return;
    }

    if(strlen($role)<=1){
      $this->__flash('Invalid role');
      $this->index();
      return;
    }


    $di = array();
    $di['nama'] = $nama;
    $di['email'] = $email;
    $di['role'] = $role;

    $res = $this->bum->update($sess->user->id,$di);
    if($res){
      $sess = $this->getKey();
      if(!is_object($sess)) $sess = new stdClass();
      if(!isset($sess->user)) $sess->user = new stdClass();
      $sess->user->id = 1;
      $sess->user->nama = $nama;
      $sess->user->email = $email;
      $this->setKey($sess);

      $this->__flash('Profil '.$nama.' berhasil diubah...');
      redir(base_url('profil'),1);
      return;
    }else{
      $this->__flash('Password confirmation doesn\'t match');
      $this->index();
      return;
    }
  }
}
