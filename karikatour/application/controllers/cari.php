<?php
	class cari extends CI_Controller{
		public function index(){
			$data['cari']=$this->product_m->get_all();
			$this->load->view('cari',$data);
		}
 
		public function search(){
			$keyword = $this->input->post('cari');
			$data['products']=$this->model_m->get_product_keyword($keyword);
			$this->load->view('beranda_nologin',$data);
		}
	}