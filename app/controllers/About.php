<?php

class About extends Controller{
    public function index($nama = "John Doe", $pekerjaan ="Progammer", $umur = 35){
        $data['judul'] = "About Us";
        $data['nama'] = $nama; 
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;        
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }    
}