<?php  

class About extends Controller{
  public function index($nama = 'Irsyad', $pekerjaan = 'Mahasiswa', $umur=22)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header');
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'Page';
    $this->view('templates/header');
    $this->view('about/page');
    $this->index('templates/footer');  
  
  }  
}