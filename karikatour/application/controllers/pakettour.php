<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pakettour extends CI_Controller
{
    public function index()
    {
        
    }

    public function jepang()
    {
        $this->load->view('pakettour1/jepang.php');
    }

    public function jepang1()
    {
        $this->load->view('pakettour1/jepang1.php');
    }

    public function korea()
    {
        $this->load->view('pakettour1/korea.php');
    }

    public function korea1()
    {
        $this->load->view('pakettour1/korea1.php');
    }

    public function malaysia()
    {
        $this->load->view('pakettour1/malaysia.php');
    }

    public function singapura()
    {
        $this->load->view('pakettour1/singapura.php');
    }

    public function bali()
    {
        $this->load->view('pakettour1/bali.php');
    }

    public function toba()
    {
        $this->load->view('pakettour1/toba.php');
    }

    public function bangkok()
    {
        $this->load->view('pakettour2/bangkok.php');
    }

    public function bunaken()
    {
        $this->load->view('pakettour2/bunaken.php');
    }

    public function china()
    {
        $this->load->view('pakettour2/china.php');
    }

    public function lombok()
    {
        $this->load->view('pakettour2/lombok.php');
    }

    public function lombok1()
    {
        $this->load->view('pakettour2/lombok1.php');
    }

    public function london()
    {
        $this->load->view('pakettour2/london.php');
    }

    public function paris()
    {
        $this->load->view('pakettour2/paris.php');
    }

    public function rajaampat()
    {
        $this->load->view('pakettour2/rajaampat.php');
    }
}
