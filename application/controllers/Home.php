<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
 
    {
        parent::__construct();
        $this->load->model('m_sekolah');
        
    }
    

    public function index()
    {
        
        $data = array(
            'title' => 'Pemetaan Sekolah SD/SMP',
            'sekolah' => $this->m_sekolah->tampil(),
            'isi' =>'v_pemetaan'
        );
              $this->load->view('layout/wrapper', $data, FALSE);
        
    }


}

