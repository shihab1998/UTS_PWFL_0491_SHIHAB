<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
				$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item active'",
			"vtmbh"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item'",
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_home');
		$this->load->view('template/v_footer');
	}


	public function lihatmhs()
	{
			$data = array(
			"title"	=> "Data Mahasiswa",
			"home"	=> "class='nav-item '",
			"vtmbh"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'",
			);
		$data ['mhs'] = $this->m_mahasiswa->lihatmhs();
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mahasiswa',$data);
		$this->load->view('template/v_footer');
	}

	public function tambahmhs()
	{
					$data = array(
			"title"	=> "Data Mahasiswa",
			"home"	=> "class='nav-item '",
			"vtmbh"	=> "class='nav-item active'",
			"vmhs"	=> "class='nav-item '",
			"vlog"	=> "class='nav-item'",
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_tambah_mhs');
		$this->load->view('template/v_footer');
	}

	public function editmhs($id_mhs)
	{
					$data = array(
			"title"	=> "Data Mahasiswa",
			"home"	=> "class='nav-item '",
			"vtmbh"	=> "class='nav-item '",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'",
			);
		$this->load->view('template/v_header',$data);
		$data['mhse'] = $this->m_mahasiswa->editambilmhs($id_mhs);
		$this->load->view('v_edit_mhs',$data);
		$this->load->view('template/v_footer');

	}

	public function log()
	{
					$data = array(
			"title"	=> "Data Mahasiswa",
			"home"	=> "class='nav-item '",
			"vtmbh"	=> "class='nav-item '",
			"vmhs"	=> "class='nav-item '",
			"vlog"	=> "class='nav-item active'",
			);
		$this->load->view('template/v_header',$data);
		$data ['mhs'] = $this->m_mahasiswa->lihatlog();
		$this->load->view('v_log_mhs',$data);
		$this->load->view('template/v_footer');

	}
	
}
