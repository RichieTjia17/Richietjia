<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('home/beranda.php', $data);
        } else {
            $this->load->view('home/beranda_nologin.php');
        }
    }

    public function pilihanmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pilihan/pilihan.php', $data);
        } else {
            $this->load->view('pilihan/pilihan_nologin.php');
        }
    }

    public function pilihan()
    {
        $this->load->view('pilihan/pilihan_nologin.php');
    }

    public function pemesanan()
    {
        $this->load->view('pemesanan/pemesanan_nologin.php');
    }

    public function pemesananmasuk()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('destinasi')->result_array();

        $this->form_validation->set_rules('menu_paket', 'Pilihan Paket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        //$this->form_validation->set_rules('centang', 'Checklist', 'required');
        //$this->form_validation->set_rules('pesanAlamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pemesanan/pemesanan.php', $data);
        } else {
            //$email = $this->input->post('email');
            $data = [
                'pilihan_paket' => $this->input->post('menu_paket'),
                'waktu_pemesanan' => time(),
                'user_id' => $this->input->post('id_user')
            ];
            $this->db->insert('pesanan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Promo berhasil Ditambah!! </div>');
            redirect('home');
        }
    }

    

    public function tentangkami()
    {
        $this->load->view('tentangkami/tentangkami_nologin.php');
    }

    public function tentangkamimasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tentangkami/tentangkami.php', $data);
        } else {
            $this->load->view('tentangkami/tentangkami_nologin.php');
        }
    }

    public function hubungikami()
    {
        $this->load->view('hubungikami/hubungikami_nologin.php');
    }

    public function hubungikamimasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('hubungikami/hubungikami.php', $data);
        } else {
            $this->load->view('hubungikami/hubungikami_nologin.php');
        }
    }
}
