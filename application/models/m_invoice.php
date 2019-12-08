<?php 
 
class M_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$invoice = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tglpesan' => date('Y-m-d H:i:s'),
			'batasbayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
		);
		$this->db->insert('invoice', $invoice);
		$idinvoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'idinvoice' => $idinvoice,
				'idbarang' => $item['id'],
				'namabarang' => $item['name'],
				'jumlah' => $item['qty'],
				'harga' => $item['price']
			);
			$this->db->insert('pesanan', $data);
		}
		return TRUE;
	}

	public function tampil_data()
	{
		return $this->db->get('invoice');
	}
}