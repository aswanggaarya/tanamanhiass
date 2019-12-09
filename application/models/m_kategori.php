<?php 
 
class M_kategori extends CI_Model{
	public function datakaktus()
	{
		return $this->db->get_where("barang",array('kategori' => 'Tanaman Kaktus'));
	}

	public function dataanggrek()
	{
		return $this->db->get_where("barang",array('kategori' => 'Tanaman Anggrek'));
	}
}