<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model 
	{
		public function lihatmhs(){
		// mengambil data dari tabel
			$query = $this->db->get('tampil');
		return $query->result_array();	
	}

		public function lihatlog(){
		// mengambil data dari tabel
			$query = $this->db->get('log');
		return $query->result_array();	
	}

		public function editambilmhs($id_mhs)
		{
			$this->db->where('id_mhs',$id_mhs);
			$query = $this->db->get('mhs');
			return $query->result_array();
		}

		public function tambahmhs()
		{
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama'),
				'jns_kelamin' => $this->input->post('jkl'),
				'alamat_lengkap' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('nohp')
			);
			return $this->db->insert('mhs',$data);	
		}

		public function ubahmhs()
		{
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama'),
				'jns_kelamin' => $this->input->post('jkl'),
				'alamat_lengkap' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('nohp')
			);
			$id_lama = $this->input->post('id_mhs');
			$this->db->where('id_mhs',$id_lama);
			return $this->db->update('mhs',$data);	
		}

		public function hapusmhs($id_mhs)
		{
			return $this->db->delete('mhs',array('id_mhs' =>$id_mhs));
		}

}