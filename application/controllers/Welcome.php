<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	
	public function __construct()		
	{
		parent::__construct();
		$this->load->model('mahasiswa');
	}
	public function index()
	{
		$data['siswa'] = $this->mahasiswa->getAllUser();
		$this->load->view('partial/sidebar');
		$this->load->view('partial/navbar');
		$this->load->view('partial/footer');
		$this->load->view('partial/content',$data);
	}
		public function form()
		{
			$this->load->view('user/tambah');
		}
		public function simpanData()
		{
			$this->mahasiswa->inputData();
			redirect ()-> base_url();
		}
		public function hapus($nis)
		{
			$this->mahasiswa->hapusData($nis);
			redirect ()-> base_url();
		}
		public function formEdit($nis)
		{
			$data['siswa'] = $this->mahasiswa->getSiswaByNIS($nis);
			$this->load->view('user/update', $data);
		}
			public function ubahData()
		{
			$this->mahasiswa->updateData();
			redirect ()-> base_url();
		}
}