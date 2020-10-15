<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Profil Desa Glonggong';
		$data['visi'] = $this->db->get('visi')->row_array();
		$data['misi'] = $this->db->get('misi')->result_array();
		$data['sejarah'] = $this->db->get('sejarah')->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('profil/index');
		$this->load->view('templates/footer');
	}
	
	public function strukturOrganisasi()
	{
		$data['title'] = 'Struktur Organisasi Pemerintahan';
		$data['struktur'] = $this->db->get('pemerintahan_desa')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('profil/strukturOrganisasi');
		$this->load->view('templates/footer');
	}
}
