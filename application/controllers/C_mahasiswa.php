<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller 
{
	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if (!$this->form_validation->run()==false) {
			$this->m_mahasiswa->tambahmhs();
			redirect ('page/');
		}else {
			redirect('page/tambahmhs');
		}
	}

	public function ubahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if (!$this->form_validation->run()==false) {
			$this->m_mahasiswa->ubahmhs();
			redirect ('page/');
		}else {
			redirect('page/ubahmhs');
		}
	}

	public function hapusmhs($id_mhs)
	{
		if ($id_mhs != ""){
			$this->m_mahasiswa->hapusmhs($id_mhs);
			redirect('page');
		}else{
			redirect('page');
		}
	}

}