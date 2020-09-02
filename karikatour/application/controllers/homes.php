<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homes extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('homes/home.php', $data);
        } else {
            $this->load->view('homes/home_nologin.php');
        }
    }

    public function choicelogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('choice/choice.php', $data);
        } else {
            $this->load->view('choice/choice_nologin.php');
        }
    }

    public function choice()
    {
        $this->load->view('choice/choice_nologin.php');
    }

    public function booking()
    {
        $this->load->view('booking/booking_nologin.php');
    }

    public function bookinglogin()
    {
        $data['title'] = 'Booking';
        $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('destination')->result_array();

        $this->form_validation->set_rules('menu_paket', 'Pilihan Paket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        //$this->form_validation->set_rules('centang', 'Checklist', 'required');
        //$this->form_validation->set_rules('pesanAlamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('booking/booking.php', $data);
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
            redirect('homes');
        }
    }

    public function aboutus()
    {
        $this->load->view('aboutus/aboutus_nologin.php');
    }

    public function aboutuslogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('aboutus/aboutus.php', $data);
        } else {
            $this->load->view('aboutus/aboutus_nologin.php');
        }
    }

    public function contactus()
    {
        $this->load->view('contactus/contactus_nologin.php');
    }

    public function contactuslogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('contactus/contactus.php', $data);
        } else {
            $this->load->view('contactus/contactus_nologin.php');
        }
    }
}
