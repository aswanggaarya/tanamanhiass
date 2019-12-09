<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
		$this->load->model('m_invoice');
		$this->load->model('m_kategori');
 	 	$this->load->helper('url');
	}

	public function index()
	{
		$data['barang'] = $this->m_barang->tampil_data()->result();
		$this->load->view('home/index', $data);
	}

	public function tambahkeranjang($id)
	{
		$barang = $this->m_barang->find($id);

		$data = array(
	        'id'      => $barang->idbarang,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->namabarang
		);

		$this->cart->insert($data);
		redirect('home/index');
	}

	public function detailkeranjang()
	{
		$this->load->view('home/keranjang');
	}

	public function hapuskeranjang()
	{
		$this->cart->destroy();
		redirect('home/index');
	}

	public function bayar()
	{
		$this->load->view('home/bayar');
	}

	public function prosespesanan()
	{
		$is_processed = $this->m_invoice->index();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('home/prosespesanan');
		}else{
			echo "Maaf, Pesanan Anda Gagal diproses!";
		}
	}

	public function tanamankaktus()
	{
		$data['tanamankaktus'] = $this->m_kategori->datakaktus()->result();
		$this->load->view('home/tanamankaktus', $data);
	}

	public function tanamananggrek()
	{
		$data['tanamananggrek'] = $this->m_kategori->dataanggrek()->result();
		$this->load->view('home/tanamananggrek', $data);
	}

	public function detail($idbarang)
	{
		$data['barang'] = $this->m_barang->detailbarang($idbarang);
		$this->load->view('home/detailbarang', $data);
	}
}
