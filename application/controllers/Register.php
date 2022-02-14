<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Register',
            'isi' =>'v_register'
        );
              $this->load->view('layout/wrapper', $data, FALSE);
        
    }
    
}




/* End of file Controllername.php */
