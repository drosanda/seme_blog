<?php
class Artikel extends JI_Controller
{
  public $pagesize = 12;

  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load('b_user_model','bum');
  }
  public function index(){
    $data = $this->__init();
    $data['page'] = 1;
    $data['pagesize'] = $this->pagesize;
    $data['artikel_count'] = $this->ckm->countAll();
    $data['artikel_list'] = $this->ckm->getAll(0,$this->pagesize);
    $data['pagetotal'] = ceil($data['artikel_count']/$this->pagesize);

    $this->setTitle('List artikel');
    $this->setDescription("List artikel");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $this->putThemeContent("artikel/home",$data);
    $this->loadLayout("col-1",$data);
    $this->render();
  }
  public function page($page=''){
    $data = $this->__init();

    $page = (int) $page;
    if($page<=1) $page = 1;

    $data['page'] = $page;
    $data['pagesize'] = $this->pagesize;
    $data['artikel_count'] = (int) $this->ckm->countAll();
    $data['artikel_list'] = $this->ckm->getAll($page,$this->pagesize);
    $data['pagetotal'] = ceil($data['artikel_count']/$this->pagesize);

    $this->setTitle('List artikel');
    $this->setDescription("List artikel");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $this->putThemeContent("artikel/home",$data);
    $this->loadLayout("col-1",$data);
    $this->render();
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

    if(strlen($judul)<=1){
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
  public function hapus($id){
    //ambil current session
    $sess = $this->getKey();
    if(!isset($sess->user->id)){
      redir(base_url('dashboard/?hapus=error3'));
      return;
    }

    //teknik casting
    // digunakan untuk memaksa tipe data yang digunakan
    // supaya sama persis dengan castingnya.
    $id = (int) $id;
    if($id <= 0) $id=0;

    // cek data
    $ckm = $this->ckm->getById($id);
    if(!isset($ckm->id)){
      redir(base_url('dashboard/?hapus=error1'));
      return;
    }

    $res = $this->ckm->del($id);
    if($res){
      redir(base_url('dashboard/?hapus=sukses'));
    }else{
      redir(base_url('dashboard/?hapus=error2'));
    }
  }
}
