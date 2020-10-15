<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	
	public function index()
	{
		$data['title'] ='Beranda';

		// ambil data berita utama
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['berita'] = $this->db->get()->result_array();

		// ambil data informasi desa
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi');
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['informasi'] = $this->db->get()->result_array();

		

		$this->load->view('templates/header',$data);
		$this->load->view('berita/index');
		$this->load->view('templates/footer');
	}

	public function post($url)
	{
		// ambil data berita utama
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('url',$url);
		$data['berita'] = $this->db->get()->row_array();

		$data['tags'] = explode(',', $data['berita']['tags']);

		$data['title'] = $data['berita']['judul'];

		// terbaru
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['terbaru'] = $this->db->get()->result_array();

		// informasi
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi desa');
		$this->db->order_by('tglPosting','DESC');
		$data['info'] = $this->db->get()->result_array();


		$this->load->view('templates/header',$data);
		$this->load->view('berita/post');
		$this->load->view('templates/footer');	
	}

	public function tags($tag) 
	{
		$data['hasil'] = $this->uri->segment(2);

		$data['tag'] = implode(' ', explode('%20', $tag));

		// ambil data 
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('tags',$data['tag'],'both');
		$data['berita'] = $this->db->get()->result_array();

		// terbaru
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['terbaru'] = $this->db->get()->result_array();

		// informasi
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi desa');
		$this->db->order_by('tglPosting','DESC');
		$data['info'] = $this->db->get()->result_array();


		$this->load->view('templates/header',$data);
		$this->load->view('berita/template');
		$this->load->view('templates/footer');		
	}

	public function category($tag) 
	{
		$data['hasil'] = $this->uri->segment(2);

		$data['tag'] = implode(' ', explode('%20', $tag));

		// ambil data 
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori',$data['tag'],'both');
		$data['berita'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['terbaru'] = $this->db->get()->result_array();

		// informasi
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi desa');
		$this->db->order_by('tglPosting','DESC');
		$data['info'] = $this->db->get()->result_array();

		$data['title'] = 'Kategori : '.$data['tag'];

		$this->load->view('templates/header',$data);
		$this->load->view('berita/template');
		$this->load->view('templates/footer');		
	}

	public function search()
	{
		$keyword = htmlspecialchars($this->input->post('keyword',true));
		
		$data['tag'] = $keyword;
		$data['hasil'] = $this->uri->segment(2);

		$data['title'] = 'Search : '.$keyword;

		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('judul',$keyword,'both');
		$this->db->or_like('tags',$keyword,'both');
		$this->db->order_by('tglPosting','DESC');
		$data['berita'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['terbaru'] = $this->db->get()->result_array();

		// informasi
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi desa');
		$this->db->order_by('tglPosting','DESC');
		$data['info'] = $this->db->get()->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('berita/template');
		$this->load->view('templates/footer');		
	}

	public function beritaLainnya()
	{
		$data['tag'] = '';
		$data['hasil'] = 'Semua berita';

		$data['title'] = 'Berita lainnya';

		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$data['berita'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->order_by('tglPosting','DESC');
		$this->db->limit(5);
		$data['terbaru'] = $this->db->get()->result_array();

		// informasi
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','berita.kategori_id=kategori.id');
		$this->db->where('is_post',1);
		$this->db->like('kategori','informasi desa');
		$this->db->order_by('tglPosting','DESC');
		$data['info'] = $this->db->get()->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('berita/template');
		$this->load->view('templates/footer');		
	}
}
