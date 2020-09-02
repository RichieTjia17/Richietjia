<?php
defined('BASEPATH') or exit('No direct script access allowed');

class author extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('homes');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('homes/login', $data);
        } else {
            //validasi sukses
            $this->login();
            //redirect('karikatour');
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('daftarakun', ['email' => $email])->row_array();
        if ($user != null) {
            //cek password
            if (password_verify($password, $user['kata_sandi'])) {
                $data = [
                    'email' => $user['email'],
                ];
                $this->session->set_userdata($data);
                redirect('homes');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password </div>');
                redirect('author');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Account is not registered </div>');
            redirect('author');
        }
    }

    public function daftar()
    {
        if ($this->session->userdata('email')) {
            redirect('karikatour');
        }
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[daftarakun.email]', [
            'is_unique' => 'This email has already taken'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]',
            ['min_length' => 'Password too short!!']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar';
            $this->load->view('home/daftar', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama_depan' => htmlspecialchars($this->input->post('nama_depan', true)),
                'nama_belakang' => htmlspecialchars($this->input->post('nama_belakang', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'username' => htmlspecialchars($this->input->post('nickname', true)),
                'email' => htmlspecialchars($email),
                'kata_sandi' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'date_created' => time()
            ];
            $this->db->insert('daftarakun', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Account Creation Success!! Please Activate your account </div>');
            redirect('home');
        }
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('karikatour');
        }
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'required|trim');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[daftarakun.email]', [
            'is_unique' => 'This email has already taken'
        ]);
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|min_length[3]',
            ['min_length' => 'Password too short!!']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('homes/register', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama_depan' => htmlspecialchars($this->input->post('first_name', true)),
                'nama_belakang' => htmlspecialchars($this->input->post('last_name', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('dateofbirth', true)),
                'username' => htmlspecialchars($this->input->post('nickname', true)),
                'email' => htmlspecialchars($email),
                'kata_sandi' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
                'date_created' => time()
            ];
            $this->db->insert('daftarakun', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Account Creation Success!! Please Activate your account </div>');
            redirect('homes');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Logout Success </div>');
        redirect('home');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Logout Success </div>');
        redirect('home');
    }

    public function history()
    {
        $data['title'] = 'History Pemesanan';
        $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
        //load model pesanan
        $this->load->model('Models');
        $data['pesanan'] = $this->Models->getPaketan();
        $data['paketan'] = $this->Models->getPaketan2();
        $data['noPesanan'] = $this->Models->getNoPesanan();
        $data['menu'] = $this->db->get('destinasi')->result_array();
        $this->form_validation->set_rules('menu_paket', 'Menu Paket', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('pemesanan/riwayat', $data);
        } else {
            $pesanan_id = $this->input->post('pesanan_id');
            $destinasi_id = $this->input->post('menu_paket');
            $this->db->set('pilihan_paket', $destinasi_id);
            $this->db->where('pesanan_id', $pesanan_id);
            $this->db->update('pesanan');
            redirect('auth/history');
        }
    }
    public function deleteHistory($id)
    {
        $this->load->model('Models');
        $this->Models->deleteHis($id);
        redirect('auth/history');
    }

    public function edit()
    {
        $data['title'] = 'edit pesanan';
        $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('pemesanan/riwayat', $data);
        }
    }
}
