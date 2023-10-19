<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
		$this->load->model('kegiatan_model','kegiatan');
		$this->load->model('daftar_model', 'daftar');
		$list_kegiatan=$this->kegiatan->getAll();
		$list_daftar=$this->daftar->getAll();
		$data['list_daftar']= $list_daftar;
		$data['list_kegiatan']= $list_kegiatan;
		$this->load->view('home/index',$data);
		
	}

	public function view(){
		$this->load->model('kegiatan_model','kegiatan');
		$_id=$this->input->get('id');
		$data['kegiatan']=$this->kegiatan->findById($_id);
		$this->load->model('kategori_peserta_model','kategori_peserta');
        $data['list_kategori_peserta']=$this->kategori_peserta->getAll();
		$this->load->view('home/view',$data);
	}

    public function saves(){
        $this->load->model('daftar_model','daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');
		
        $data_daftar[] = $_alasan; // ? 2
        $data_daftar[] = $_users_id; // ? 3
        $data_daftar[] = $_kegiatan_id; // ? 4
        $data_daftar[] = $_kategori_peserta_id; // ? 5
        $data_daftar[] = $_nosertifikat; // ? 6

        $this->daftar->saves($data_daftar);
		$row = $this->daftar->lastId();
		$_id = $row->id;
        redirect(base_url().'index.php/daftar/view?id='. $_id , 'refresh');

    }

}