<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_kelas');
	}

	public function index() 
	{
		$data['judul'] = 'Menu Kelas';
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$this->load_template('kelas/home', $data);
	}

	public function add_kelas() 
	{
		$data['judul'] = 'Tambah Kelas';
		$this->load_template('kelas/form_tambah_kelas', $data);
	}

	public function act_tambah() 
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('kelas/add_kelas');
		} else {
			$param = $this->input->post();
			$proses = $this->M_kelas->act_tambah($param);

			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil diinputkan'));
				redirect('kelas');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal diinputkan'));
				redirect('kelas/add_kelas');
			}
		}
	}

	public function edit($id) 
	{
		$data['judul'] = "Edit Kelas";
		$data['data_kelas'] = $this->M_kelas->getDetailKelas($id);
		$this->load_template('kelas/form_edit_kelas', $data);
	}

	public function act_edit() 
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$param = $this->input->post();
			$proses = $this->M_kelas->act_edit($param);

			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil diedit'));
				redirect('kelas');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='') 
	{
		$proses = $this->M_kelas->act_hapus($id);
		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil dihapus'));
		} else {
			$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal dihapus'));
		}
		redirect('kelas');
	}
}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */