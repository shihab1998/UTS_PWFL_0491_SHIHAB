<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('v_home');
	}

	public function lihatmhs()
	{
		$data ['mhs'] = $this->m_mahasiswa->lihatmhs();
		$this->load->view('v_mahasiswa',$data);
	}

	public function tambahmhs()
	{
		$this->load->view('v_tambah_mhs');
	}

	public function editmhs($id_mhs)
	{
		$data['mhse'] = $this->m_mahasiswa->editambilmhs($id_mhs);
		$this->load->view('v_edit_mhs',$data);
	}

	public function log()
	{
		$data ['mhs'] = $this->m_mahasiswa->lihatlog();
		$this->load->view('v_log_mhs',$data);
	}
	
}
