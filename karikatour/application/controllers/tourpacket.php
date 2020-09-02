<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tourpacket extends CI_Controller
{
    public function index()
    {
        
    }

    public function japan()
    {
        $this->load->view('tourpacket1/japan.php');
    }

    public function japan1()
    {
        $this->load->view('tourpacket1/japan1.php');
    }

    public function korea()
    {
        $this->load->view('tourpacket1/korea.php');
    }

    public function korea1()
    {
        $this->load->view('tourpacket1/korea1.php');
    }

    public function malaysia()
    {
        $this->load->view('tourpacket1/malaysia.php');
    }

    public function singapore()
    {
        $this->load->view('tourpacket1/singapore.php');
    }

    public function bali()
    {
        $this->load->view('tourpacket1/bali.php');
    }

    public function toba()
    {
        $this->load->view('tourpacket1/toba.php');
    }

    public function bangkok()
    {
        $this->load->view('tourpacket2/bangkok.php');
    }

    public function bunaken()
    {
        $this->load->view('tourpacket2/bunaken.php');
    }

    public function china()
    {
        $this->load->view('tourpacket2/china.php');
    }

    public function lombok()
    {
        $this->load->view('tourpacket2/lombok.php');
    }

    public function lombok1()
    {
        $this->load->view('tourpacket2/lombok1.php');
    }

    public function london()
    {
        $this->load->view('tourpacket2/london.php');
    }

    public function paris()
    {
        $this->load->view('tourpacket2/paris.php');
    }

    public function rajaampat()
    {
        $this->load->view('tourpacket2/rajaampat.php');
    }
}
