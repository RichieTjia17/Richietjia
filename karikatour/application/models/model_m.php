<?php 
	class Product_m extends CI_Model{
		public function get_all(){
			return $this->db->get('destinasi')->result();
		}
		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('destinasi');
			return $this->db->get()->result();
		}
	}