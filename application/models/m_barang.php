<?php 
 
class M_barang extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('barang');
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function find($id)
	{
		$result = $this->db->where('idbarang', $id)
						   ->limit(1)
						   ->get('barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		}else{
			return array();
		}
	}

	public function detailbarang($idbarang)
	{
		$result = $this->db->where('idbarang', $idbarang)->get('barang');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return false;
		}
	}
}