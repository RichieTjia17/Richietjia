<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pilihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Pilihan Paket';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->model('filter_models', 'model');
            $data['paket'] = $this->db->get('destinasi')->result_array();

            $this->load->view('pilihan/pilihan.php', $data);
            if ($this->input->post('submit')) {
                $data['kata_kunci'] = $this->input->post('kata_kunci');
                $data['data_filter'] = $this->model->get_paket();
            } else {
                $data['kata_kunci'] = null;
            }
        } else {
            $this->load->view('pilihan/pilihan.php');
        }
    }

    public function search()
    {
        if ($this->input->post('submit')) {
            echo $this->input->post('kata_kunci');
        }
    }
}
