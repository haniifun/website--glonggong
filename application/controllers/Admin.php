<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')) {
        	redirect('auth');
        }
        $this->load->library('form_validation');
    }

    // dashboard post
	public function index()
	{
		$data['title'] = "Dashboard Admin";
		$data['page'] = $this->uri->segment(2);

		$data['berita'] = $this->db->get_where('berita', ['is_post' => '1'])->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/admin-footer');
	}

	public function preview($url)
	{
		
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('url',$url);
		$data['berita'] = $this->db->get()->row_array();

		$data['tags'] = explode(',', $data['berita']['tags']);

		$data['page'] = $this->uri->segment(2);
		$data['title'] = $data['berita']['url'];


		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/template');
		$this->load->view('templates/admin-footer');
	}

	public function kategori()
	{
		$data['title'] = "Kategori Berita";
		$data['page'] = $this->uri->segment(2);

		$data['kategori'] = $this->db->get('kategori')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/kategoriBerita');
		$this->load->view('templates/admin-footer');
	}

	public function tambahKategori() {
		$kategori = htmlspecialchars($this->input->post('kategori',true));
		$tabel = $this->input->post('tabel');
		$page = $this->input->post('page');


        $kategori = [
        	'kategori' => $kategori,
        ];

        $this->db->insert($tabel,$kategori);
        redirect('admin/'.$page);
	}

	public function editKategori($id) {
		$kategori = htmlspecialchars($this->input->post('kategori',true));
		$tabel = $this->input->post('tabel');
		$page = $this->input->post('page');

        $this->db->set('kategori',$kategori);
        $this->db->where('id',$id);
        $this->db->update($tabel);

        redirect('admin/'.$page);
	}

	public function hapusBerita()
	{
		$id = $this->input->post('id');

		$this->db->delete('berita', ['id' => $id]);
		redirect('admin');
	}


	public function postBerita() 
	{
		$data['title'] = "Post Berita";
		$data['page'] = $this->uri->segment(2);

		$data['kategori'] = $this->db->get('kategori')->result_array();



		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('admin/postBerita');
			$this->load->view('templates/admin-footer');		
        } else {
        	$judul = htmlspecialchars($this->input->post('judul', true));
        	$kategori = htmlspecialchars($this->input->post('kategori', true));
        	$isPost = htmlspecialchars($this->input->post('isPost', true));
        	$konten = $this->input->post('berita');
        	$url = implode('-', explode(' ', strtolower($judul)));
        	$foto = $_FILES['foto']['name'];
        	if ($isPost=='1'){
        		$tglPosting = date('Ymd');
        	} else {
        		$tglPosting = "";
        	}


	        if ($foto) {
	            $config['allowed_types'] = 'gif|jpg|png|jpeg';
	            $config['max_size']      = '4096';
	            $config['upload_path'] = './assets/img/berita/';

	            $this->load->library('upload', $config);

	            if ($this->upload->do_upload('foto')) {
	                $namaFoto = $this->upload->data('file_name');
	            } else {
	                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar salah atau ukuran terlalu besar</div>');                   
	            }
	        }

        	$berita = [
        		'judul' => $judul,
        		'kategori_id' => $kategori,
        		'konten' => $konten,
        		'url' => $url,
        		'is_post' => $isPost,
        		'tglPosting' => $tglPosting, 
        		'gambar' => $namaFoto
        	];

        	$this->db->insert('berita',$berita);
        	redirect('admin');
        }
        	
	}

/* ============================================================
	Profil desa
===============================================================*/
	public function profilDesa()
	{
		$data['title'] = 'Profil Desa';
		$data['page'] = $this->uri->segment(2);
		$data['visi'] = $this->db->get('visi')->row_array();
		$data['misi'] = $this->db->get('misi')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/profilDesa');
		$this->load->view('templates/admin-footer');		
	}

	public function editVisi()
	{
		$data['title'] = 'Profil Desa | Edit Visi';
		$data['page'] = $this->uri->segment(2);
		$data['visi'] = $this->db->get('visi')->row_array();

		$this->form_validation->set_rules('visi', 'Visi', 'trim|required');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('admin/editVisi');
			$this->load->view('templates/admin-footer');		
        } else {
        	$visi = htmlspecialchars($this->input->post('visi', true));

            $this->db->set('visi', $visi);
            $this->db->where('id', 1);
            $this->db->update('visi');

            redirect('admin/profilDesa');
        }

	}

	public function editMisi()
	{
		$data['title'] = 'Profil Desa | Edit Misi';
		$data['page'] = $this->uri->segment(2);
		$data['misi'] = $this->db->get('misi')->result_array();
		
		$this->form_validation->set_rules('misi[]', 'misi', 'trim|required');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('admin/editMisi');
			$this->load->view('templates/admin-footer');		
        } else {
        	$id = $this->input->post('nomor',true);
        	$misi = $this->input->post('misi',true);

        
        	$this->db->empty_table('misi');

        	for ($i=0; $i < count($this->input->post('misi')); $i++) { 
        		$insertMisi = [
        			'id' => $id[$i],
        			'misi' => $misi[$i]
        		];
        		$this->db->insert('misi',$insertMisi);
        	}

            redirect('admin/profilDesa');
        }

	}

	public function tambahMisi()
	{
		
		$this->form_validation->set_rules('nomor', 'Nomor', 'trim|required|is_unique[misi.id]', [
            'is_unique' => 'Nomor ini sudah digunakan'
        ]);
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tambah misi gagal. silahkan ulangi lagi!</div>'); 
            redirect('admin/editMisi');    	
        } else {
        	$id = $this->input->post('nomor',true);
        	$misi = $this->input->post('misi',true);

    		$insertMisi = [
    			'id' => $id,
    			'misi' => $misi
    		];
    		$this->db->insert('misi',$insertMisi);

            redirect('admin/editMisi');
        }

	}
	public function hapusMisi($id)
	{
		$this->db->delete('misi', ['id' => $id]);
		redirect('admin/editMisi');
	}

	public function editSejarah() 
	{
		$data['title'] = 'Profil Desa | Edit Sejarah';
		$data['page'] = $this->uri->segment(2);
		$data['misi'] = $this->db->get('sejarah')->result_array();
		
		// $this->form_validation->set_rules('misi[]', 'misi', 'trim|required');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('admin/editSejarah');
			$this->load->view('templates/admin-footer');		
        } else {

            redirect('admin/profilDesa');
        }		
	}
/*	End Profil Desa
==================================================================*/

	// private function _upload($foto)
	// {
 //        if ($foto) {
 //            $config['allowed_types'] = 'gif|jpg|png|jpeg';
 //            $config['max_size']      = '4096';
 //            $config['upload_path'] = './assets/img/profile/';

 //            $this->load->library('upload', $config);

 //            if ($this->upload->do_upload('image')) {
 //                // $old_image = $data['user']['image'];
 //                // if ($old_image != 'default.jpg') {
 //                //     unlink(FCPATH . 'assets/img/profile/' . $old_image);
 //                // }

 //                $new_image = $this->upload->data('file_name');
 //                $this->db->set('image', $new_image);
 //            } else {
 //                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar salah atau ukuran terlalu besar</div>');                   
 //                redirect('user/edit');
 //            }
 //        }
	// }

/* ===============================================================
	Struktur Organisasi
==================================================================*/
	public function tambahAnggota() {
		$nama = htmlspecialchars($this->input->post('nama',true));
		$jabatan = htmlspecialchars($this->input->post('jabatan',true));
		$foto = $_FILES['foto'];
		$tabel = $this->input->post('tabel');
		$page = $this->input->post('page');

        if ($foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '4096';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $namaFoto = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar salah atau ukuran terlalu besar</div>');                   
            }
        }

        $anggota = [
        	'nama' => $nama,
        	'jabatan' => $jabatan,
        	'foto' => $namaFoto
        ];

        $this->db->insert($tabel,$anggota);
        redirect('admin/'.$page);

	}

	public function editAnggota($id) {
		$nama = htmlspecialchars($this->input->post('nama',true));
		$jabatan = htmlspecialchars($this->input->post('jabatan',true));
		$foto = $_FILES['foto'];
		$tabel = $this->input->post('tabel');
		$page = $this->input->post('page');

		if ($foto) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '4096';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $namaFoto = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar salah atau ukuran terlalu besar</div>');                   
            }
        }



        $this->db->set('nama',$nama);
        $this->db->set('jabatan',$jabatan);
        $this->db->set('foto',$namaFoto);
        $this->db->where('id',$id);
        $this->db->update($tabel);

        redirect('admin/'.$page);

	}

	public function hapusAnggota()
	{
		$id = $this->input->post('id');
		$tabel = $this->input->post('tabel');
		$page = $this->input->post('page');

		$this->db->delete($tabel, ['id' => $id]);
		redirect('admin/'.$page);
	}

	// Struktur Organisasi Pemerintah Desa
	public function pemerintahDesa()
	{
		$data['title'] = 'Struktur Organisasi | Pemerintah Desa';
		$data['page'] = $this->uri->segment(2);
		$data['pemdes'] = $this->db->get('pemerintahan_desa')->result_array();
		
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/pemdes');
		$this->load->view('templates/admin-footer');		
	}

	// Struktur Organisasi LPM
	public function lpm()
	{
		$data['title'] = 'Struktur Organisasi | LPM';
		$data['page'] = $this->uri->segment(2);
		$data['lpm'] = $this->db->get('lpm')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/lpm');
		$this->load->view('templates/admin-footer');		
	}

	// Struktur Organisasi LPM
	public function bpd()
	{
		$data['title'] = 'Struktur Organisasi | BPD';
		$data['page'] = $this->uri->segment(2);
		$data['bpd'] = $this->db->get('bpd')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/bpd');
		$this->load->view('templates/admin-footer');		
	}

	// Struktur Organisasi LPM
	public function pkk()
	{
		$data['title'] = 'Struktur Organisasi | LPM';
		$data['page'] = $this->uri->segment(2);
		$data['pkk'] = $this->db->get('pkk')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/pkk');
		$this->load->view('templates/admin-footer');		
	}

	// Struktur Organisasi LPM
	public function karangTaruna()
	{
		$data['title'] = 'Struktur Organisasi | Karang Taruna';
		$data['page'] = $this->uri->segment(2);
		$data['karangTaruna'] = $this->db->get('karangTaruna')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/karangTaruna');
		$this->load->view('templates/admin-footer');		
	}

/*	End Profil Desa
==================================================================*/

/*=================================================================
	POTENSI DESA
------------------------------------------------------------------*/
	public function kependudukan()
	{
		$data['title'] = 'Data kependudukan';
		$data['page'] = $this->uri->segment(2);

		$data['kependudukan'] = $this->db->get('kependudukan')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/kependudukan');
		$this->load->view('templates/admin-footer');			
	}

	public function editKependudukan($id)
	{
		
		$rw = $this->input->post('rw');
		$kk =  htmlspecialchars($this->input->post('kk',true));
		$laki2 = htmlspecialchars($this->input->post('laki-laki',true));
		$perempuan = htmlspecialchars($this->input->post('perempuan',true));
	
		$this->db->set('rw',$rw);
		$this->db->set('kk',$kk);
		$this->db->set('laki-laki',$laki2);
		$this->db->set('perempuan',$perempuan);
		$this->db->where('id',$id);
		$this->db->update('kependudukan');
		redirect('admin/kependudukan');

	}

	public function tambahDataKependudukan()
	{
		$data = [
			'rw' => htmlspecialchars($this->input->post('rw',true)),
			'kk' => htmlspecialchars($this->input->post('jumlahKepalaKeluarga',true)),
			'laki-laki' => htmlspecialchars($this->input->post('jumlahLakiLaki',true)),
			'perempuan' => htmlspecialchars($this->input->post('jumlahPerempuan',true)),
		];

		$this->db->insert('kependudukan',$data);
		redirect('admin/kependudukan');
	}
	
	public function apbdes()
	{
		$data['title'] = 'APBDES';
		$data['page'] = $this->uri->segment(2);

		$data['apbdes'] = $this->db->get('apbdes')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/apbdes');
		$this->load->view('templates/admin-footer');			
	}


	public function tambahApbdes()
	{
		$data['title'] = 'Tambah File APBDES';
		$data['page'] = $this->uri->segment(2);

		$this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');

    	$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));
    	$tahun = htmlspecialchars($this->input->post('tahun',true));
    	$file = $_FILES['file'];

		if ($file) {
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['max_size']      = '';
            $config['upload_path'] = './assets/file/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $namaFile = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format file salah atau ukuran terlalu besar</div>');                   
            }
        }

        $apbdes = [
        	'deskripsi' => $deskripsi,
        	'tahun' => $tahun,
        	'file'	=> $namaFile
        ];

        $this->db->insert('apbdes',$apbdes);
        redirect('admin/apbdes');
	
	}

	public function editApbdes($id)
	{
		$this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');

    	$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));
    	$tahun = htmlspecialchars($this->input->post('tahun',true));
    	$file = $_FILES['file'];


		if ($file) {
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['max_size']      = '';
            $config['upload_path'] = './assets/file/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $namaFile = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format file salah atau ukuran terlalu besar</div>');                   
            }

	        $this->db->set('deskripsi',$deskripsi);
	        $this->db->set('tahun',$tahun);
	        $this->db->set('file',$namaFile);
	        $this->db->where('id',$id);
	        $this->db->update('apbdes');
        } else {
	        $this->db->set('deskripsi',$deskripsi);
	        $this->db->set('tahun',$tahun);
	        $this->db->where('id',$id);
	        $this->db->update('apbdes');
        }


        redirect('admin/apbdes');   
	}

	public function formulir()
	{
		$data['title'] = 'Surat dan Formulir';
		$data['page'] = $this->uri->segment(2);

		$data['file'] = $this->db->get('file')->result_array();

		$this->load->view('templates/admin-header', $data);
		$this->load->view('admin/formulir');
		$this->load->view('templates/admin-footer');			
	}

	public function tambahFile()
	{
		$data['title'] = 'Tambah File Surat atau Formulir';
		$data['page'] = $this->uri->segment(2);

		$this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('admin/tambahFormulir');
			$this->load->view('templates/admin-footer');			
        } else {
        	$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));
        	$file = $_FILES['file'];

			if ($file) {
	            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
	            $config['max_size']      = '';
	            $config['upload_path'] = './assets/file/';

	            $this->load->library('upload', $config);

	            if ($this->upload->do_upload('file')) {
	                $namaFile = $this->upload->data('file_name');
	            } else {
	                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format file salah atau ukuran terlalu besar</div>');                   
	            }
	        }

	        $surat = [
	        	'deskripsi' => $deskripsi,
	        	'file'	=> $namaFile
	        ];

	        $this->db->insert('file',$surat);
	        redirect('admin/formulir');

        }	
	}

	public function editFile($id)
	{
	
		$this->form_validation->set_rules('deskripsi','Deskripsi','required|trim');

    	$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));
    	$file = $_FILES['file'];


		if ($file) {
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
            $config['max_size']      = '';
            $config['upload_path'] = './assets/file/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $namaFile = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format file salah atau ukuran terlalu besar</div>');                   
            }

	        $this->db->set('deskripsi',$deskripsi);
	        $this->db->set('file',$namaFile);
	        $this->db->where('id',$id);
	        $this->db->update('file');
        } else {
	        $this->db->set('deskripsi',$deskripsi);
	        $this->db->where('id',$id);
	        $this->db->update('file');
        }


        redirect('admin/formulir');   
	}



}