<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    public function index()
    {
        $data = array(
            'page' => 'page/dashboard',
            'title' => 'Dashboard'
        );

        $this->load->view('main', $data);
        
    }

}

?>