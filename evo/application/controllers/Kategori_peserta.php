<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_peserta extends CI_Controller {
    
    public function index(){
        $this->load->model('kategori_peserta_model','kategori_peserta');

        $data['list_kategori_peserta']=$this->kategori_peserta->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $id = $this->input->get('id');
        $this->load->model('kategori_peserta_model','kategori_peserta');
        $data['kategori_peserta']=$this->kategori_peserta->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/view',$data);
        $this->load->view('layout/footer');
        
    }

    public function create(){
        $data['judul']='Form Kelola kategori_peserta';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('kategori_peserta_model', 'kategori_peserta');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_kategori_peserta_edit = $this->input->post('kategori_peserta_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_kegiatan.
        $data_kategori_peserta[] = $_id; // ? 1
        $data_kategori_peserta[] = $_nama; // ? 2
    
        if (isset($_kategori_peserta_edit)){
            //update data lama
            $data_kategori_peserta[] = $_kategori_peserta_edit; //? 10
            $this->kategori_peserta->update($data_kategori_peserta);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->kategori_peserta->save($data_kategori_peserta);
        }
        
        redirect(base_url(). 'index.php/kategori_peserta/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }

    public function edit(){

        $_id = $this->input->get('id');
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $kategori_peserta_edit = $this->kategori_peserta->findById($_id);

        $data['judul']='Form Update kategori_peserta';
        $data['kategori_peserta_edit'] = $kategori_peserta_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $this->kategori_peserta->delete($id);
        redirect(base_url(). 'index.php/kategori_peserta', 'refresh');
    }

}
?>