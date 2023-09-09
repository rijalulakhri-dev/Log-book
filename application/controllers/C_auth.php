<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {

    public function login()
    {
        $data = array(
            'title' => 'Login'
        );

        $this->load->view('page/auth/login', $data);
        
    }

}




?>