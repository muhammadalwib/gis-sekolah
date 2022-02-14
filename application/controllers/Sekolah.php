<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sekolah');
    }


    public function index()
    {
        $data = array(
            'title' => 'Data Sekolah',
            'sekolah' => $this->m_sekolah->tampil(),
            'isi' => 'v_datasekolah'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function input()
    {

        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('no_telpon', 'No Telpon', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kondisi_sekolah', 'Kondisi Sekolah', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('luas_bangunan', 'Luas Bangunan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('jumlah_siswa', 'Jumlah Siswa', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Sekolah',
                'isi' => 'v_input_datasekolah'
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'kondisi_sekolah' => $this->input->post('kondisi_sekolah'),
                'luas_bangunan' => $this->input->post('luas_bangunan'),
                'jumlah_siswa' => $this->input->post('jumlah_siswa'),
                'keterangan' => $this->input->post('keterangan')
            );
            $this->m_sekolah->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('sekolah/input');
        }
    }
    public function edit($id_sekolah)
    {
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('no_telpon', 'No Telpon', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('kondisi_sekolah', 'Kondisi Sekolah', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('luas_bangunan', 'Luas Bangunan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('jumlah_siswa', 'Jumlah Siswa', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi!!!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Sekolah',
                'sekolah' => $this->m_sekolah->detail($id_sekolah),
                'isi' => 'v_edit_datasekolah'
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $data = array(
              
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'kondisi_sekolah' => $this->input->post('kondisi_sekolah'),
                'luas_bangunan' => $this->input->post('luas_bangunan'),
                'jumlah_siswa' => $this->input->post('jumlah_siswa'),
                'keterangan' => $this->input->post('keterangan')
          
            );
            $this->m_sekolah->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('sekolah');
        }
    }
    public function hapus($id_sekolah)
    {
        $data =  array('id_sekolah' => $id_sekolah);
        $this->m_sekolah->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus..');
        redirect('sekolah');
    }
}

/* End of file Sekolah.php */
