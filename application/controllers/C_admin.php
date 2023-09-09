<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tambah Pengguna',
            'pageTitle' => 'Tambah Pengguna',
            'page' => 'page/admin/daftar_pengguna'
        );        

        $this->load->view('main', $data);
        
    }

    public function list_pengguna()
    {
        $data = array(
            'title' => 'Daftar Pengguna',
            'pageTitle' => 'Daftar Pengguna',
            'page' => 'page/admin/list_pengguna'
        );        

        $this->load->view('main', $data);
        
    }

}


?>