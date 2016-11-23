<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Auth_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_mapel');
		$this->load->model('M_guru');
	}

	public function index() 
	{
		$data['judul'] = 'Menu Mapel';
		$data['data_mapel'] = $this->M_mapel->getMapel();
		$this->load_template('mapel/home', $data);
	}

	public function add_mapel() 
	{
		$data['judul'] = 'Tambah Mapel';
		$data['data_guru'] = $this->M_guru->getGuru();
		$this->load_template('mapel/form_tambah_mapel', $data);
	}

	public function act_tambah() 
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');
		$this->form_validation->set_rules('id_guru', 'Guru', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('mapel/add_mapel');
		} else {
			$param = $this->input->post();
			$proses = $this->M_mapel->act_tambah($param);

			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil diinputkan'));
				redirect('mapel');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Mapel gagal diinputkan'));
				redirect('mapel/add_mapel');
			}
		}
	}

	public function edit($id) 
	{
		$data['judul'] = "Edit Mapel";
		$data['data_mapel'] = $this->M_mapel->getDetailMapel($id);
		$data['data_guru'] = $this->M_guru->getGuru();
		$this->load_template('mapel/form_edit_mapel', $data);
	}

	public function act_edit() 
	{
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');
		$this->form_validation->set_rules('id_guru', 'ID Guru', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$param = $this->input->post();
			$proses = $this->M_mapel->act_edit($param);
			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil diedit'));
				redirect('mapel');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Mapel gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='') 
	{
		$proses = $this->M_mapel->act_hapus($id);
		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Mapel berhasil dihapus'));
		} else {
			$this->session->set_flashdata('alert_msg', err_msg('Mapel gagal dihapus'));
		}
		redirect('mapel');
	}
}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */