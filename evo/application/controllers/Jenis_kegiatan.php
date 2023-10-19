<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_kegiatan extends CI_Controller {
    
    public function index(){
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');

        $data['list_jenis_kegiatan']=$this->jenis_kegiatan->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $id = $this->input->get('id');
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        $data['jenis_kegiatan']=$this->jenis_kegiatan->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/view',$data);
        $this->load->view('layout/footer');
        
    }

    public function create(){
        $data['judul']='Form Kelola jenis_Kegiatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_jenis_kegiatan_edit = $this->input->post('jenis_kegiatan_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_kegiatan.
        $data_jenis_kegiatan[] = $_id; // ? 1
        $data_jenis_kegiatan[] = $_nama; // ? 2
    
        if (isset($_jenis_kegiatan_edit)){
            //update data lama
            $data_jenis_kegiatan[] = $_jenis_kegiatan_edit; //? 10
            $this->jenis_kegiatan->update($data_jenis_kegiatan);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->jenis_kegiatan->save($data_jenis_kegiatan);
        }
        
        redirect(base_url(). 'index.php/jenis_kegiatan/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }

    public function edit(){

        $_id = $this->input->get('id');
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $jenis_kegiatan_edit = $this->jenis_kegiatan->findById($_id);

        $data['judul']='Form Update jenis_Kegiatan';
        $data['jenis_kegiatan_edit'] = $jenis_kegiatan_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $this->jenis_kegiatan->delete($id);
        redirect(base_url(). 'index.php/jenis_kegiatan', 'refresh');
    }

}
?>