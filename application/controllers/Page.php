<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('v_home');
		$this->load->view('v_footer');
	}

	public function lihatmhs()
	{
		$data ['mhs'] = $this->m_mahasiswa->lihatmhs();
		$this->load->view('v_mahasiswa',$data);
		$this->load->view('v_footer');
	}

	public function tambahmhs()
	{
		$this->load->view('v_tambah_mhs');
		$this->load->view('v_footer');
	}

	public function editmhs($id_mhs)
	{
		$data['mhse'] = $this->m_mahasiswa->editambilmhs($id_mhs);
		$this->load->view('v_edit_mhs',$data);
		$this->load->view('v_footer');
	}

	public function log()
	{
		$data ['mhs'] = $this->m_mahasiswa->lihatlog();
		$this->load->view('v_log_mhs',$data);
		$this->load->view('v_footer');
	}
	
}
