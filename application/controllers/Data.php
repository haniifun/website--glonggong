<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller 
{
	public function kependudukan() 
	{
		$data['title'] = 'Data Kependudukan';

		$data['kependudukan'] = $this->db->get('kependudukan')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('data/index');
		$this->load->view('templates/footer');
	}

	
}