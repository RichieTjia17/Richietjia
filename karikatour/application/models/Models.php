<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{
    public function get_semua_paket()
    {
        return $this->db->get('destinasi')->result_array();
    }
    public function get_paket($kata_kunci = null)
    {
        if ($kata_kunci) {
            $this->db->like('negara', $kata_kunci);
        }
    }

    public function getPaketan()
    {
        $query = " SELECT `pesanan`.*,`daftarakun`.*
                    FROM   `pesanan` JOIN `daftarakun`
                    ON `daftarakun`.`id` = `pesanan`.`user_id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getNoPesanan()
    {
        $query = "SELECT `pesanan`.`pesanan_id` 
                    FROM `pesanan`
        ";
        return $this->db->query($query)->result_array();
    }
    public function getPaketan2()
    {
        $query = "SELECT `destinasi`.*,`pesanan`.*
                    FROM `destinasi` JOIN `pesanan`
                    ON `destinasi`.`id` = `pesanan`.`pilihan_paket`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getPaketan3()
    {
        $query = "SELECT `destination`.*,`pesanan`.*
                    FROM `destination` JOIN `pesanan`
                    ON `destination`.`id` = `pesanan`.`pilihan_paket`
        ";
        return $this->db->query($query)->result_array();
    }

    public function deleteHis($id)
    {
        $this->db->delete('pesanan', ['pesanan_id' => $id]);
    }
}
