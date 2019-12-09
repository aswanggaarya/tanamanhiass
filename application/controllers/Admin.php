<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// __construct slalu dijalankan setiap auth.php dipanggil
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('m_barang');
		$this->load->model('m_invoice');
 	 	$this->load->helper('url');
	}

	public function registrasi()
	{
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result();
		$data['dataadmin'] = $this->m_admin->tampil_data()->result();
		
		$this->load->view('admin/registrasi', $data);
	}

	public function tambahadmin()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$namaadmin = htmlspecialchars($this->input->post('namaadmin', true));
 
		$data = array(
			'username' => $username,
			'password' => $password,
			'namaadmin' => $namaadmin
			);
		$this->m_admin->input_data($data,'admin');
		redirect('admin/registrasi');
	}

	public function hapusadmin($idadmin){
		$where = array('idadmin' => $idadmin);
		$this->m_admin->hapus_data($where,'admin');
		redirect('admin/registrasi');
	}

	public function editadmin($idadmin){
		$where = array('idadmin' => $idadmin);
		$data['admin'] = $this->m_admin->edit_data($where,'admin')->result();
		$this->load->view('admin/registrasi',$data);
	}

	public function updateadmin(){
		$idadmin = htmlspecialchars($this->input->post('idadmin', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$namaadmin = htmlspecialchars($this->input->post('namaadmin', true));
	 
		$data = array(
			'username' => $username,
			'namaadmin' => $namaadmin
		);
	 
		$where = array(
			'idadmin' => $idadmin
		);
	 
		$this->m_admin->update_data($where,$data,'admin');
		redirect('admin/registrasi');
	}

	public function barang()
	{
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result();
		$data['databarang'] = $this->m_barang->tampil_data()->result();
		
		$this->load->view('admin/barang', $data);
	}

	public function tambahbarang()
	{
		$namabarang = htmlspecialchars($this->input->post('namabarang', true));
		$lokasi = htmlspecialchars($this->input->post('lokasi', true));
		$kategori = htmlspecialchars($this->input->post('kategori', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
		$stok = htmlspecialchars($this->input->post('stok', true));
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = '') {
			
		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diupload!";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
 
		$data = array(
			'namabarang' => $namabarang,
			'lokasi' => $lokasi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
			);
		$this->m_barang->input_data($data,'barang');
		redirect('admin/barang');
	}

	public function hapusbarang($idbarang){
		$where = array('idbarang' => $idbarang);
		$this->m_barang->hapus_data($where,'barang');
		redirect('admin/barang');
	}

	public function editbarang($idbarang){
		$where = array('idbarang' => $idbarang);
		$data['barang'] = $this->m_barang->edit_data($where,'barang')->result();
		$this->load->view('admin/barang',$data);
	}

	public function updatebarang(){
		$idbarang = htmlspecialchars($this->input->post('idbarang', true));
		$namabarang = htmlspecialchars($this->input->post('namabarang', true));
		$lokasi = htmlspecialchars($this->input->post('lokasi', true));
		$kategori = htmlspecialchars($this->input->post('kategori', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
		$stok = htmlspecialchars($this->input->post('stok', true));
	 
		$data = array(
			'namabarang' => $namabarang,
			'lokasi' => $lokasi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok
		);
	 
		$where = array(
			'idbarang' => $idbarang
		);
	 
		$this->m_barang->update_data($where,$data,'barang');
		redirect('admin/barang');
	}

	public function invoice()
	{
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result();
		$data['invoice'] = $this->m_invoice->tampil_data()->result();
		
		$this->load->view('admin/invoice', $data);
	}

	public function detail($idinvoice)
	{
		$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result();
		$data['invoice'] = $this->m_invoice->ambilidinvoice($idinvoice);
		$data['pesanan'] = $this->m_invoice->ambilidpesanan($idinvoice);

		$this->load->view('admin/detailinvoice', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('multi/index');
	}	

}