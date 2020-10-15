<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends CI_Controller {

	public function bpd()
	{
		$data['title'] = 'Struktur Organisasi Badan Pengawas Desa';
		$data['struktur'] = $this->db->get('bpd')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('lembaga/bpd');
		$this->load->view('templates/footer');
	}

	public function lpm()
	{
		$data['title'] = 'Struktur Organisasi Lembaga Permusyawaratan Desa';
		$data['struktur'] = $this->db->get('lpm')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('lembaga/lpm');
		$this->load->view('templates/footer');
	}

	public function pkk()
	{
		$data['title'] = 'Struktur Organisasi Pemerintahan';
		$data['struktur'] = $this->db->get('pkk')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('lembaga/pkk');
		$this->load->view('templates/footer');
	}

	public function karangTaruna()
	{
		$data['title'] = 'Struktur Organisasi Pemerintahan';
		$data['struktur'] = $this->db->get('karangTaruna')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('lembaga/karangTaruna');
		$this->load->view('templates/footer');
	}




}
