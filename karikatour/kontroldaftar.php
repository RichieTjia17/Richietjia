<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontroldaftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}
	public function proses()
	{
		$this->form_validation->set_rules('namaakun', 'namaakun','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('katasandi', 'katasandi','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$namadepan = $this->input->post('namadepan');
			$namabelakang = $this->input->post('namabelakang');
			$jeniskelamin = $this->input->post('jeniskelamin');
			$tanggal = $this->input->post('tanggallahir');
			$namaakun = $this->input->post('namaakun');
			$alamatemail = $this->input->post('alamatemail');
			$katasandi = $this->input->post('katasandi');
			
			$this->auth->kontroldaftar($namadepan,$namabelakang,$jeniskelamin,$tanggal,$namaakun,$alamatemail,$katasandi);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('masuk');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('daftar');
		}
	}
}