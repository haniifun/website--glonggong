<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potensi extends CI_Controller {

	public function umkm()
	{
		$data['title'] = 'Usaha Mikro Kecil dan Menengah | Desa Glonggong';

		$data['umkm'] = $this->db->get('umkm')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('potensi/umkm');
		$this->load->view('templates/footer');
	}

 	public function detailUmkm($id) 
 	{

 		$this->db->select('*');
 		$this->db->from('umkm');
 		$this->db->join('produk_umkm', 'umkm.id=produk_umkm.id_umkm');
 		$this->db->where('umkm.id', $id);
 		$data['umkm'] = $this->db->get()->result_array();


		$data['title'] = $data['umkm'][0]['nama'];
		$this->load->view('templates/header',$data);
		$this->load->view('potensi/detailUmkm');
		$this->load->view('templates/footer');
 	}

}
