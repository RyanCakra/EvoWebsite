<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index(){
		$this->load->model('kegiatan_model','kegiatan');
		$this->load->model('daftar_model', 'daftar');
		$list_kegiatan=$this->kegiatan->getAll();
		$list_daftar=$this->daftar->getAll();
		$data['list_daftar']= $list_daftar;
		$data['list_kegiatan']= $list_kegiatan;
		$this->load->view('dashboard/index',$data);
	}
}