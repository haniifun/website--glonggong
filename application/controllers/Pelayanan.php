<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function ktp() 
	{
		$data['title'] = 'Blangko Permohonan KTP';

		$this->form_validation->set_rules('jenisPermohonan','Jenis Permohonan','');
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('noKK','Nomor KK','required|trim|min_length[16]|max_length[16]',[
			'max_length' => 'Nomor KK harus 16 digit',
			'min_length' => 'Nomor KK harus 16 digit'
		]);
		$this->form_validation->set_rules('nik','Nomor NIK','required|trim|min_length[16]|max_length[16]',[
			'max_length' => 'Nomor NIK harus 16 digit',
			'min_length' => 'Nomor NIK harus 16 digit'
		]);
		$this->form_validation->set_rules('rt','Nomor RT','required|trim');
		$this->form_validation->set_rules('rw','Nomor RW','required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('pelayanan/ktp');
			$this->load->view('templates/footer');			
		} else {
			$jenisPermohonan = $this->input->post('jenisPermohonan');
			$nama = htmlspecialchars($this->input->post('nama',true));
			$noKK = htmlspecialchars($this->input->post('noKK',true));
			$nik = htmlspecialchars($this->input->post('nik',true));
			$rt = htmlspecialchars($this->input->post('rt',true));
			$rw = htmlspecialchars($this->input->post('rw',true));
			$kk = $_FILES['foto'];

			$data = [
				'jenisPermohonan' => $jenisPermohonan,
				'nama' => $nama,
				'noKK' => $noKK,
				'nik' => $nik,
				'rt' => $rt,
				'rw' => $rw,
				'fileKK' => '',
			];

			$this->db->insert('permohonan_ktp',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permohonan berhasil dikirim</div>');
			redirect('pelayanan/ktp');
		}
	}

	public function download() 
	{
		$data['title'] = 'Download Surat dan Formulir';

		$data['file'] = $this->db->get('file')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('pelayanan/download');
		$this->load->view('templates/footer');
	}
}