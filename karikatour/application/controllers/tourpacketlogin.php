<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tourpacketlogin extends CI_Controller
{
    public function index()
    {
        
    }

    public function japanlogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/japanlogin.php', $data);
        } else {
            $this->load->view('tourpacket/japan.php');
        }
    }

    public function japan1login()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/japan1login.php', $data);
        } else {
            $this->load->view('tourpacket/japan1.php');
        }
    }

    public function korealogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/korealogin.php', $data);
        } else {
            $this->load->view('tourpacket/korea.php');
        }
    }

    public function korea1login()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/korea1login.php', $data);
        } else {
            $this->load->view('tourpacket/korea1.php');
        }
    }

    public function malaysialogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/malaysialogin.php', $data);
        } else {
            $this->load->view('tourpacket/malaysia.php');
        }
    }

    public function singaporelogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/singaporelogin.php', $data);
        } else {
            $this->load->view('tourpacket/singapore.php');
        }
    }

    public function balilogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/balilogin.php', $data);
        } else {
            $this->load->view('tourpacket/bali.php');
        }
    }

    public function tobalogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket1login/tobalogin.php', $data);
        } else {
            $this->load->view('tourpacket/toba.php');
        }
    }

    public function bangkoklogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/bangkoklogin.php', $data);
        } else {
            $this->load->view('tourpacket/bangkok.php');
        }
    }

    public function bunakenlogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/bunakenlogin.php', $data);
        } else {
            $this->load->view('tourpacket/bunaken.php');
        }
    }

    public function chinalogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/chinalogin.php', $data);
        } else {
            $this->load->view('tourpacket/china.php');
        }
    }

    public function lomboklogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/lomboklogin.php', $data);
        } else {
            $this->load->view('tourpacket/lombok.php');
        }
    }

    public function lombok1login()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/lomboklogin.php', $data);
        } else {
            $this->load->view('tourpacket/lombok.php');
        }
    }

    public function londonlogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/londonlogin.php', $data);
        } else {
            $this->load->view('tourpacket/london.php');
        }
    }

    public function parislogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/parislogin.php', $data);
        } else {
            $this->load->view('tourpacket/paris.php');
        }
    }

    public function rajaampatlogin()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('tourpacket2login/rajaampatlogin.php', $data);
        } else {
            $this->load->view('tourpacket/rajaampat.php');
        }
    }
}
