<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pakettourmasuk extends CI_Controller
{
    public function index()
    {
        
    }

    public function jepangmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/jepangmasuk.php', $data);
        } else {
            $this->load->view('pakettour1/jepang.php');
        }
    }

    public function jepang1masuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/jepang1masuk.php', $data);
        } else {
            $this->load->view('pakettour1/jepang1.php');
        }
    }

    public function koreamasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/koreamasuk.php', $data);
        } else {
            $this->load->view('pakettour1/korea.php');
        }
    }

    public function korea1masuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/korea1masuk.php', $data);
        } else {
            $this->load->view('pakettour1/korea1.php');
        }
    }

    public function malaysiamasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/malaysiamasuk.php', $data);
        } else {
            $this->load->view('pakettour1/malaysia.php');
        }
    }

    public function singapuramasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/singapuramasuk.php', $data);
        } else {
            $this->load->view('pakettour1/singapura.php');
        }
    }

    public function balimasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/balimasuk.php', $data);
        } else {
            $this->load->view('pakettour1/bali.php');
        }
    }

    public function tobamasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour1masuk/tobamasuk.php', $data);
        } else {
            $this->load->view('pakettour1/toba.php');
        }
    }

    public function bangkokmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/bangkokmasuk.php', $data);
        } else {
            $this->load->view('pakettour2/bangkok.php');
        }
    }

    public function bunakenmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/bunakenmasuk.php', $data);
        } else {
            $this->load->view('pakettour2/bunaken.php');
        }
    }

    public function chinamasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/chinamasuk.php', $data);
        } else {
            $this->load->view('pakettour2/china.php');
        }
    }

    public function lombokmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/lombokmasuk.php', $data);
        } else {
            $this->load->view('pakettour2/lombok.php');
        }
    }

    public function lombok1masuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/lombok1masuk.php', $data);
        } else {
            $this->load->view('pakettour2/lombok1.php');
        }
    }

    public function londonmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/londonmasuk.php', $data);
        } else {
            $this->load->view('pakettour2/london.php');
        }
    }

    public function parismasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/parismasuk.php', $data);
        } else {
            $this->load->view('pakettour2/paris.php');
        }
    }

    public function rajaampatmasuk()
    {
        if ($this->session->userdata('email')) {
            $data['title'] = 'Welcome';
            $data['user'] = $this->db->get_where('daftarakun', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('pakettour2masuk/rajaampatmasuk.php', $data);
        } else {
            $this->load->view('pakettour2/rajaampat.php');
        }
    }
}
