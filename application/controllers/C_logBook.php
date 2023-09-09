<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_logBook extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Isi Logbook',
            'page' => 'page/mahasiswa/log_book'
        );

        $this->load->view('main', $data);
        
    }

}

/* End of file C_logBook.php */

?>