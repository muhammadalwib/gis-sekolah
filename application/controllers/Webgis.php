<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Webgis extends CI_Controller {

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
            'isi' =>'v_webgis'
        );
              $this->load->view('front-end/wrapper', $data, FALSE);
           
    }
    public function list_sekolah()
    {
        $data = array(
            'title' => 'Pemetaan Sekolah SD/SMP',
            'sekolah' => $this->m_sekolah->tampil(),
            'isi' =>'v_list_sekolah'
        );
              $this->load->view('front-end/wrapper', $data, FALSE);
           
    }
    
}

/* End of file Webgis.php */
