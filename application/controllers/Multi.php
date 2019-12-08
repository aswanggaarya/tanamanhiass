<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi extends CI_Controller {

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
	// __construct slalu dijalankan setiap multiuser.php dipanggil
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('multi/index');
		} else {
			$this->_login();
		}
	}

	// private = agar fungsnya tidak bisa dijalankan melalui url
	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin', ['username' => $username])->row_array();

		if ($admin > 0) {
			// bila usernya ada cek passwordnya
			if (password_verify($password, $admin['password'])) {
				$data = [
					'username' => $admin['username']
				];
				$this->session->set_userdata($data);
				redirect('admin/registrasi'); 
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('multi');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
			redirect('multi');
		}
	}
}