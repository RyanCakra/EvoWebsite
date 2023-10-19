<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    
    public function index(){
        $this->load->model('daftar_model','daftar');

        $data['list_daftar']=$this->daftar->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $id = $this->input->get('id');
        $this->load->model('daftar_model','daftar');
        $data['daftar']=$this->daftar->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola Daftar Kegiatan';
        $this->load->model('users_model','users');
        $data['list_users']=$this->users->getAll();
        $this->load->model('kegiatan_model','kegiatan');
        $data['list_kegiatan']=$this->kegiatan->getAll();
        $this->load->model('kategori_peserta_model','kategori_peserta');
        $data['list_kategori_peserta']=$this->kategori_peserta->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('daftar_model', 'users');

        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');
        $_daftar_edit = $this->input->post('daftar_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_kegiatan.
        $data_daftar[] = $_tanggal_daftar; // ? 1
        $data_daftar[] = $_alasan; // ? 2
        $data_daftar[] = $_users_id; // ? 3
        $data_daftar[] = $_kegiatan_id; // ? 4
        $data_daftar[] = $_kategori_peserta_id; // ? 5
        $data_daftar[] = $_nosertifikat; // ? 6
     

        if (isset($_daftar_edit)){
            //update data lama
            $data_daftar[] = $_daftar_edit; //? 10
            $this->users->update($data_daftar);
            $_id = $_daftar_edit;
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->users->save($data_daftar);
            $row = $this->users->lastId();
            $_id = $row->id;
        }
        
        redirect(base_url(). 'index.php/daftar/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }

    public function edit(){

        $_id = $this->input->get('id');
        $this->load->model('daftar_model', 'daftar');
        $daftar_edit = $this->daftar->findById($_id);
        $this->load->model('users_model','users');
        $data['list_users']=$this->users->getAll();
        $this->load->model('kegiatan_model','kegiatan');
        $data['list_kegiatan']=$this->kegiatan->getAll();
        $this->load->model('kategori_peserta_model','kategori_peserta');
        $data['list_kategori_peserta']=$this->kategori_peserta->getAll();

        $data['judul']='Form Update daftar';
        $data['daftar_edit'] = $daftar_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('daftar_model', 'daftar');
        $this->daftar->delete($id);
        redirect(base_url(). 'index.php/daftar', 'refresh');
    }

    public function saves(){
        $this->load->model('daftar_model', 'daftar');

        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');
        $_daftar_edit = $this->input->post('daftar_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_kegiatan.
        $data_daftar[] = $_tanggal_daftar; // ? 1
        $data_daftar[] = $_alasan; // ? 2
        $data_daftar[] = $_users_id; // ? 3
        $data_daftar[] = $_kegiatan_id; // ? 4
        $data_daftar[] = $_kategori_peserta_id; // ? 5
        $data_daftar[] = $_nosertifikat; // ? 6
     

        if (isset($_daftar_edit)){
            //update data lama
            $data_daftar[] = $_daftar_edit; //? 10
            $this->daftar->update($data_daftar);
            $_id = $_daftar_edit;
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->daftar->saves($data_daftar);
            $row = $this->daftar->lastId();
            $_id = $row->id;
        }
        
        redirect(base_url(). 'index.php/view/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }
}
?>